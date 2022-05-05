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
 *   id = "info_block",
 *   admin_label = @Translation("Info block"),
 *   category = @Translation("Information block")
 * )
 */
class InfoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $data = array(
      'name' => 'Subhadip Nandi',
      'email' => 'sn@prachanda.in'
    );
    return [
      '#title' => 'Information Page',
      '#theme' => 'my_page',
      '#items' => $data
    ];
   }
}
