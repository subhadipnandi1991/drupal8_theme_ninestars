  <?php
    namespace Drupal\test_module\Controller;
    use Drupal\Core\Controller\ControllerBase;

    class TestModuleController extends ControllerBase {
      public function testModule() {
        return [
          '#title' => 'Test Page'
        ];
      }

      // public function info() {
      //   return [
      //     '#title' => 'Information Page',
      //     // '#theme' => 'info_page',
      //     '#markup' => 'This is an Information Page'
      //   ];
      // }
    }
?>
