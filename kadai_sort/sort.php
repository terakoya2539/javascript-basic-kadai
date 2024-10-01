<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
   <p>
    <?php
    function sort_2way($array, $order) {
      if ($order) {
         echo '昇順にソートします。<br>';
         sort($array); //昇順ソート
      } else {
         echo  '降順にソートします。<br>';
         rsort($array);
      }

      // ソート済みの配列を表示する
      foreach ($array as $value) {
         echo $value . "<br>";
      }
       }
   
     // テストデータ
      $nums = [15, 4, 18, 23, 10];
    // 関数の外から$numは参照することはできない

    // 昇順でソート
sort_2way($nums, true);

echo "<br>"; // 出力の区切り

// 降順でソート
sort_2way($nums, false);
    ?>
   </p> 
</body>
</html>