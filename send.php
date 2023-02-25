<?php 
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $intro = '';
  $chara = '';
  $kuwata_flg = false;

  //最近の配列のよくあるか９き９あkた

  $test = ['tokyo','chiba','saitama','kanagawa'];

  //ケース1
  if ($name == 'kuwata') {
    $intro = "白い恋人たちを歌います。";
  }

  //ケース2
  if ($name == 'kuwata') {
    $intro = "TSUNAMIを歌います。";
  } elseif($name == 'aiko') {
    $intro = "カブトムシを歌います。";
  }  


  //ケース3
  if ($name == 'kuwata') {
    $chara = "バンドメンバーが奥さんです。";
  } else {
    $chara = "桑田さんしか知りません。";
  }


  //三項演算子
  if ($name == 'kuwata' && $name == 'aiko') {
    $intro = 'とてもいい歌手です。';
  }

  if ($name == 'kuwata' && $age == '55') {
    $kuwata_flg = true;
  }


?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    名前は「<?= $name ?>」<br>
    年齢は「<?= $age;?>」<br>
    メアドは「<?php echo $email;?>」<br>
    住所は「<?php echo $address;?>」<br>
    
    <?= $name ?>って歌手を知っていますか?<br>
    「<?= $intro ?>」<br>
    あと秘密があって 「<?= $chara?>」

    <?php if($kuwata_flg == true): ?> 
    <div style="background-color:blue;color:white;">
      夜に向かって雪が降り注ぐと
    </div>
    <?php endif; ?>


  </body>
</html>
