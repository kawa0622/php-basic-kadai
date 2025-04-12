<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
    <?php

    // クラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義する
      public function show_price() {
          echo $this->price . '<br>';
      }
      }

      // クラスを定義する
      class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義する
      public function show_height() {
         echo $this->height . '<br>';
      }
      }
      
      // インスタンスを生成する
      $potato = new Food("potato", 250);
      $dog = new Animal("dog", 60, 5000);

      //インスタンス$potatoの中身を出力
      print_r($potato);
      echo '<br>';
      print_r($dog);
      echo '<br>';

      // インスタンス$foodのメソッドを呼び出す
      $potato->show_price();
      $dog->show_height();
      ?>
   </body>
</html>
