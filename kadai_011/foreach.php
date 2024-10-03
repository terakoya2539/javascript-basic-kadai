<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $product = [
            '名前'=> '玉ねぎ',
            '値段'=> '200',
            '産地'=> '北海道'];
            // 連想配列$productのキーと値を1つずつ順番に出力する
        foreach($product as $key => $value) {
            // 連想配列のキーと値をコロン（:）で区切り
            echo $key . ':' . $value .'<br>';
        }    
        ?>
    </p>
</body>
</html>