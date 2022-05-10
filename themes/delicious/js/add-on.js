$(document).ready(function() {
  // alert('this is working');
  // if($('input').hasClass('form-control')) {
  //   alert('it has the class');
  // }

  if($('input').hasClass('form-control')) {
    $('input.form-control').parent().addClass('form-group mt-3');
    // var select = $('form-control');
    // console.log('select' + JSON.stringify(select));
  }

  $('div.php-email-form').addClass('container');

});
