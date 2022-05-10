<?php

  namespace Drupal\contact_form_block_delicious\Form;

  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\Core\Database\Database;


  class ContactForm extends FormBase {

    /**
    * {@inheritdoc}
    */

    public function getFormId() {
      return 'php-email-form';
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

      $form['subject'] = array(
        '#type' => 'textfield',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Subject',
          'class' => array('form-control')
        )
      );

      $form['message'] = array(
        '#type' => 'textarea',
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Your Message',
          'class' => array('form-control')
        )
      );

      $form['save'] = array(
        '#type' => 'submit',
        '#value' => 'Send Message',
        '#button_type' => 'primary',
        '#attributes' => array(
          'class' => array('text-center')
        )
      );

      return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
      drupal_set_message('Your Message sent to us successfully!', 'status', TRUE);
    }

  }


 ?>
