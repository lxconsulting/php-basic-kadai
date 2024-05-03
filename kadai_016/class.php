<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>16章課題</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food {

      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      // メソッドを定義する
      public function show_price() {
        return $this->price;
      }
    }
    // クラスを定義する
    class Animal {

      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する      
      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      
      // メソッドを定義する      
      public function show_height() {
        return $this->height;
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンスの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';
    // メソッドにアクセスして実行する
    echo $food->show_price();
    echo '<br>';
    echo $animal->show_height();
    ?>
  </p>
</body>

</html>