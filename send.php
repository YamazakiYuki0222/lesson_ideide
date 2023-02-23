<?php 
  var_dump($_POST);
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $address = $_POST['address'];

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    名前は「<?php echo $name;?>」<br>
    年齢は「<?php echo $age;?>」<br>
    メアドは「<?php echo $email;?>」<br>
    住所は「<?php echo $address;?>」<br>



  </body>
</html>
