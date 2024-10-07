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
    class Food {
        private $name;
        private $price;
        // メソッドを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price =$price;
        }
        public function show_price() {
            echo $this->price. '<br>';
        }
    }    

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
    }
        public function show_height() {
        echo $this->height . '<br>';
    }
}

     // インスタンス化する
     $food = new Food('sushi', 500);
     $animal = new Animal('dog', 10, 100);

     print_r($food);
     echo '<br>';
     print_r($animal);
     echo '<br>';

    //  メソッドへアクセスする
    $food->show_price();
    $animal->show_height();
        ?>
    </p>
</body>
</html>