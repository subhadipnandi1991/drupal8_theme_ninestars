<?php

  namespace Drupal\book_table_form_delicious\Form;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\Core\Database\Database;

  class BookTableForm extends FormBase {

    /**
    * {@inheritdoc}
    */

    public function getFormId() {
      return 'book_a_table';
    }

    /**
    * {@inheritdoc}
    */

    public function buildForm(array $form, FormStateInterface $form_state) {
      $form['name'] = array(
        '#type' => 'textfield',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Your Name',
          'class' => array('form-control')
        )
      );

      $form['email'] = array(
        '#type' => 'email',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Your Email',
          'class' => array('form-control')
        )
      );

      $form['phone'] = array(
        '#type' => 'textfield',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Your Phone',
          'class' => array('form-control')
        )
      );

      $form['date'] = array(
        '#type' => 'textfield',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Date',
          'class' => array('form-control')
        )
      );

      $form['time'] = array(
        '#type' => 'textfield',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Time',
          'class' => array('form-control')
        )
      );

      $form['people'] = array(
        '#type' => 'number',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => '# of people',
          'class' => array('form-control')
        )
      );

      $form['message'] = array(
        '#type' => 'textarea',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Message',
          'class' => array('form-control')
        )
      );
      $form['save'] = array(
        '#type' => 'submit',
        '#value' => 'Send Message',
        '#button_type' => 'primary'
      );

      return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
      drupal_set_message('Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!', 'status', TRUE);
    }

  }

 ?>
