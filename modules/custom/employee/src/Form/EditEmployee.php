<?php

  namespace Drupal\employee\Form;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\Core\Database\Database;

  class EditEmployee extends FormBase {

    /**
    * {@inheritdoc}
    */

    public function getFormId()
    {
      return 'edit_employee';
    }

    /**
    * {@inheritdoc}
    */

    public function buildForm(array $form, FormStateInterface $form_state)
    {

      $id = \Drupal::routeMatch()->getParameter('id');
      $query = \Drupal::database();
      $data = $query->select('employees', 'e')
              ->fields('e',['id', 'name', 'gender', 'about_employee'])
              ->condition('e.id', $id, '=')
              ->execute()->fetchAll(\PDO::FETCH_OBJ);

      // print_r($data);
      // exit;

      $genderOptions = array(
        // '0' => 'Select Gender',
        'Male' => 'Male',
        'Female' => 'Female',
        'Others' => 'Others'
      );

      $form['name'] = array(
        '#type' => 'textfield',
        '#title' => t('Name'),
        '#default_value' => $data[0]->name,
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Enter Your Name'
        )
      );

      $form['gender'] = array(
        '#type' => 'select',
        '#title' => 'Gender',
        '#options' => $genderOptions,
        '#required' => 'true',
        '#default_value' => $data[0]->gender
      );

      $form['about_employee'] = array(
        '#type' => 'textarea',
        '#title' => 'About Employee',
        '#default_value' => $data[0]->about_employee,
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Tell Me About Yourself'
        )
      );

      $form['update'] = array(
        '#type' => 'submit',
        '#value' => 'Update',
        '#button_type' => 'primary'
      );

      return $form;
    }

    /**
    * {@inheritdoc}
    */

    public function validateForm(array &$form, FormStateInterface $form_state) {
      $name = $form_state->getValue('name');
      if(trim($name) == '') {
        $form_state->setErrorByName('name', $this->t('Name field is required'));
      } else if($form_state->getValue('gender') == '0') {
        $form_state->setErrorByName('gender', $this->t('Gender field is required'));
      } else if($form_state->getValue('about_employee') != '') {
        $stringLen = strlen($form_state->getValue('about_employee'));
        $characterAllow = 30 - $stringLen;
        if ($characterAllow < 0) {
          $form_state->setErrorByName('about_employee', $this->t('you can write maximum 30 characters'));
        }
      }
    }

    /**
    * {@inheritdoc}
    */

    public function submitForm(array &$form, FormStateInterface $form_state) {

      $id = \Drupal::routeMatch()->getParameter('id');

      $postData = $form_state->getValues();

      unset($postData['update'], $postData['form_build_id'], $postData['form_token'], $postData['form_id'], $postData['op']);

      // echo "<pre>";
      // print_r($postData);
      // echo "</pre>";
      // exit;

      $query = \Drupal::database();
      $query->update('employees')->fields($postData)
            ->condition('id', $id)
            ->execute();

      $response = new \Symfony\Component\HttpFoundation\RedirectResponse('../employee-list');
      $response->send();

      drupal_set_message('Employee Data inserted successfully!!', 'status', TRUE);
    }
  }

 ?>
X
