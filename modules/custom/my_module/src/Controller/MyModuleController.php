<?php
  namespace Drupal\my_module\Controller;
  use Drupal\Core\Controller\ControllerBase;

  class MyModuleController extends ControllerBase {
    public function myModule() {
      return [];
    }

    public function myInfo()
    {
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

?>
