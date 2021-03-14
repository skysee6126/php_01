<!DOCTYPE html>
<html lang='ja'>
    <?php include('views/header.inc.php'); 
    $name = $_POST["name"];

    function h ($value) {
        return htmlspecialchars($value, ENT_QUOTES);
    }?>
<body>
<div class = "result">
    <p>
<?php

$food = [
    1 => "ラーメン",
    2 => "とんかつ",
    3 => "焼き鳥",
    4 => "焼き魚",
    5 => "海鮮鍋",
    6 => "寿司",
    7 => "麻婆豆腐",
    8 => "ピザ",
    9 => "パスタ",
];
$num = array_rand ($food, 1); 

echo h($name).'さんには<strong>'.$food[$num].'</strong>がおススメです！';

?></p>
    <div class="result__img">
    <img src='img/<?php echo $num ?>.jpg'>
    </div>
</div>
        <?php include('views/footer.inc.php'); ?>
    </body>
</html>
