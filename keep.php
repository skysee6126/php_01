
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

echo "<p stlye={font-weight: bolder;}>";
if ($num < 10) {
    echo $food[$num];
}

echo "がおススメです！</p>";
?>
<div>
<img src='img/<?php echo $num ?>.jpg'>
</div>
</body>
</html>

