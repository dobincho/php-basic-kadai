<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         //クラスを定義する
         class Food {
        //プロパティを定義する
          private $name;
          private $price;

        
      
        //コンストラクタを定義する
          public function __construct(string $name, int $price)  {
            $this->name = $name;
            $this->price = $price;
        }
          public function show_price() {
            echo $this->price . '<br>';
        }
         }
         //インスタンス化する
         $food = new Food('ポテト', 250);

         
         //インスタンス$foodの各プロパティの値を出力する
         echo '<pre>';
         print_r($food);
         echo '</pre>';
         echo '価格:';
         $food->show_price();
        ?>
         <?php


         //クラスを定義する
         class Animal {
        //プロパティを定義する
          private $name;
          private $height;
          private $weight;

        
      
        //コンストラクタを定義する
          public function __construct(string $name, int $height, string $weight)  {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
      
        public function show_height() {
          echo $this->height . '<br>';
        }
         }
         //インスタンス化する
         $animal = new Animal('犬', 60, 5000);
        

         //インスタンス$animalの各プロパティの値を出力する
         echo '<pre>';
         print_r($animal);
         echo '</pre>';
         echo '全長:';
         $animal->show_height();
         
        

         ?>
         /p>
        </body>
        </html>