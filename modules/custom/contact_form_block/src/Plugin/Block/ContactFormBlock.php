<?php
  namespace Drupal\contact_form_block\Plugin\Block;

  use Drupal\Core\Block\BlockBase;
  use drupal\Core\Form\FormInterface;

  /**
   * Provides a 'Custom' block.
   *
   * @Block(
   *   id = "contact_form_block",
   *   admin_label = @Translation("Contact Form Block"),
   *   category = @Translation("Contact Form Block")
   * )
   */
   class ContactFormBlock extends BlockBase {

     /**
      * {@inheritdoc}
      */
     public function build() {

       // return

       $form = \Drupal::formBuilder()->getForm('Drupal\contact_form_block\Form\ContactForm');

       return $form;
      }
   }

?>
