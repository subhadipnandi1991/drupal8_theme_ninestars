<?php
  namespace Drupal\employee\Controller;
  use Drupal\Core\Controller\ControllerBase;
  use Drupal\Core\Database\Database;

  class EmployeeController extends ControllerBase {

    public function createEmployee() {
      $form = \Drupal::formBuilder()->getForm('Drupal\employee\Form\EmployeeForm');
      // $renderForm = \Drupal::service('renderer')->render($form);

      return [
        '#theme' => 'employee',
        '#items' => $form,
        // '#type' => 'markup',
        // '#markup' => $renderForm,
        '#title' => 'Controller twig Form'
      ];
    }

    public function getEmployeeData() {
      $limit = 3;
      $query = \Drupal::database();
      $result = $query->select('employees', 'e')
                ->fields('e', ['id', 'name', 'gender', 'about_employee'])
                ->extend('Drupal\Core\Database\Query\PagerSelectExtender')->limit($limit)
                ->execute()->fetchAll(\PDO::FETCH_OBJ);

      $data = [];
      $count = 0;

      $params = \Drupal::request()->query->all();

      if(empty($params) || $params['page'] == 0) {
        $count = 1;
      } else {
        $count = $params['page'] * $limit + 1;
      }

      foreach ($result as $row) {
        $data[] = [
          'serial_no' => $count.".",
          'name' => $row->name,
          'gender' => $row->gender,
          'about_employee' => $row->about_employee,
          'edit' => t("<a href='edit-employee/$row->id'>Edit</a>"),
          'delete' => t("<a href='delete-employee/$row->id'>Delete</a>"),
        ];
        $count++;
      }

      $header = array('S_No.','Name', 'Gender', 'About', 'Edit', 'Delete');

      $build['table'] = [
        '#type' => 'table',
        '#header' => $header,
        '#rows' => $data
      ];

      $build['pager'] = [
        '#type' => 'pager'
      ];

      return [
        $build,
        '#title' => 'Employee List'
      ];
    }

    public function deleteEmployee($id) {
      $query = \Drupal::database();
      $result = $query->delete('employees')
                      ->condition('id', $id, '=')
                      ->execute();

      $response = new \Symfony\Component\HttpFoundation\RedirectResponse('../employee-list');
      $response->send();

      drupal_set_message(t('Employee has been deleted!'), 'error', TRUE);

    }

  }

 ?>
