<?php 
//文字を残せる
$name = 'yuki';
$age_number = 25;
$age_string = '25';


//ここからechoだよ
echo "sova<br>";
echo "24<br>";
echo 24 . "<br>";
echo "sova"."yamaken" . "<br>";

echo $name . "<br>";
echo $age_number . "<br>";
echo $age_string . "<br>";

?>

  <h1>見出し</h1>
  <h2>
    <?php 
      echo "second";
      echo $name;    
      echo "third"; echo "fourth";?>
  </h2>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    htmlだよ
    <a href="index2.php">次のページへ</a>
    <a href="form.php">フォームへ</a>
  </body>
</html>
