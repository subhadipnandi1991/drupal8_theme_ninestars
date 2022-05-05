<?php

  namespace Drupal\employee\Form;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\Core\Database\Database;

  class EmployeeForm extends FormBase {

    /**
    * {@inheritdoc}
    */

    public function getFormId()
    {
      return 'create_employee';
    }

    /**
    * {@inheritdoc}
    */

    public function buildForm(array $form, FormStateInterface $form_state)
    {
      $genderOptions = array(
        // '0' => 'Select Gender',
        'Male' => 'Male',
        'Female' => 'Female',
        'Others' => 'Others'
      );

      $form['name'] = array(
        '#type' => 'textfield',
        '#title' => t('Name'),
        '#default_value' => '',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Enter Your Name'
        )
      );

      $form['gender'] = array(
        '#type' => 'select',
        '#title' => 'Gender',
        '#options' => $genderOptions,
        '#required' => 'true'
      );

      $form['about_employee'] = array(
        '#type' => 'textarea',
        '#title' => 'About Employee',
        '#default_value' => '',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Tell Me About Yourself'
        )
      );

      $form['save'] = array(
        '#type' => 'submit',
        '#value' => 'Save',
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
        $characterAllow = 10 - $stringLen;
        if (characterAllow < 0) {
          $form_state->setErrorByName('about_employee', $this->t('you can write maximum 10 characters'));
        }
      }
    }

    /**
    * {@inheritdoc}
    */

    public function submitForm(array &$form, FormStateInterface $form_state) {
      $postData = $form_state->getValues();

      unset($postData['save'], $postData['form_build_id'], $postData['form_token'], $postData['form_id'], $postData['op']);

      // echo "<pre>";
      // print_r($postData);
      // echo "</pre>";
      // exit;

      $query = \Drupal::database();
      $query->insert('employees')->fields($postData)->execute();

      drupal_set_message('Employee Data inserted successfully!!', 'status', TRUE);
    }
  }

 ?>
