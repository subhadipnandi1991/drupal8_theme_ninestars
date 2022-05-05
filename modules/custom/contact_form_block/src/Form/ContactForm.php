<?php

  namespace Drupal\contact_form_block\Form;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\Core\Database\Database;


  class ContactForm extends FormBase {

    /**
    * {@inheritdoc}
    */

    public function getFormId() {
      return 'query_form';
    }

    /**
    * {@inheritdoc}
    */

    public function buildForm(array $form, FormStateInterface $form_state) {
      $form['name'] = array(
        '#type' => 'textfield',
        '#title' => t('Your Name'),
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Your Name'
        )
      );

      $form['email'] = array(
        '#type' => 'email',
        '#title' => t('Your Email'),
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Your Email'
        )
      );

      $form['subject'] = array(
        '#type' => 'textfield',
        '#title' => t('Subject'),
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Subject'
        )
      );

      $form['message'] = array(
        '#type' => 'textarea',
        '#title' => t('Message'),
        '#required' => 'true',
        '#attributes' => array(
          'placeholder' => 'Your Message'
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
      drupal_set_message('Your Message sent to us successfully!', 'status', TRUE);
    }

  }


 ?>
