<?php

  namespace Drupal\book_table_form_delicious\Plugin\Block;

  use Drupal\Core\Block\BlockBase;
  use Drupal\Core\Form\FormInterface;

  /**
  * Provides a 'Custom' block
  *
  * @Block(
  *   id = "book_table_form_delicious",
  *   admin_label = @Translation("Book Table Form Delicious"),
  *   category = @Translation("Book Table Form Delicious")
  * )
  */

  class BookTableFormBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */

     public function build() {
       $form = \Drupal::formBuilder()->getForm('Drupal\book_table_form_delicious\Form\BookTableForm');

       return $form;
     }

  }
 ?>
