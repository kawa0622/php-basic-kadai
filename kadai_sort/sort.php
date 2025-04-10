<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
  <?php
function sort_2way($array, $order) {
    if ($order == 'asc') {
        sort($array); // 昇順
        echo "昇順ソート:\n<br>";
    } else {
        rsort($array); // 降順
        echo "降順ソート:\n<br>";
    }

    foreach ($array as $value) {
        echo  $value . "<br>"; // 各要素を改行して表示
    }

    echo "\n"; // 区切り用の空行
}

// ソート対象の配列
$nums = [15, 4, 18, 23, 10];

// 昇順 → 降順 の順で関数を2回呼び出し
sort_2way($nums, 'asc');
sort_2way($nums, 'desc');
?>

  </p>
  </body>
</html>
