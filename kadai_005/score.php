<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // 変数に値を代入する
       $score1 = 80;
       $score2 = 60;
       $score3 = 55;
       $score4 = 40;
       $score5 = 100;
       $score6 = 25;
       $score7 = 80;
       $score8 = 95;
       $score9 = 30;
       $score10 = 60;

       //四則演算で合計点を算出する
       echo $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
       echo '<br>';

       // 四則演算で平均点を算出する
        echo ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;
        ?>
    </p>
    </body>
</html>