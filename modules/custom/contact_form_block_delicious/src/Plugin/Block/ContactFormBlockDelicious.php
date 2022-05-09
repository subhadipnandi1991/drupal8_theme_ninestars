<?php
  namespace Drupal\contact_form_block_delicious\Plugin\Block;

  use Drupal\Core\Block\BlockBase;
  use drupal\Core\Form\FormInterface;

  /**
   * Provides a 'Custom' block.
   *
   * @Block(
   *   id = "contact_form_block_delicious",
   *   admin_label = @Translation("Contact Form Block Delicious"),
   *   category = @Translation("Contact Form Block Delicious")
   * )
   */
   class ContactFormBlockDelicious extends BlockBase {

     /**
      * {@inheritdoc}
      */
     public function build() {

       // return

       $form = \Drupal::formBuilder()->getForm('Drupal\contact_form_block_delicious\Form\ContactForm');

       return $form;
      }
   }

?>
