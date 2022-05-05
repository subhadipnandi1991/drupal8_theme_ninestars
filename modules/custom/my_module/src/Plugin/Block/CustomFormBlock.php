<?php
/**
 * @file
 * Contains \Drupal\customblock\Plugin\Block\ArticleBlock.
 */

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'Custom' block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom Form block"),
 *   category = @Translation("Custom Form block")
 * )
 */
class CustomFormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\my_module\Form\EmployeeForm');

    return $form;
   }
}
