<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP kadai_015</title>
 </head>
 
 <body>
     <p>
     <?php
        // クラスを定義する
        class Product {
            // プロパティを定義する                        
            public $name;
            public $price;

            // メソッドを定義する
            public function set_price(string $name) {
                $this->price = $name;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        // インスタンス化する
        $name = new Product();

        // メソッドにアクセスして実行する
        $name->set_price('name');
        $name->show_price()
        ?>
    </p>
     <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
 
             // コンストラクタを定義する
             public function __construct($name, $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
         }
 
         // インスタンス化する
         $user = new Food('name', 'price');
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($user);
         ?>
     </p>
     <p>
     <?php
        // クラスを定義する
        class Hoge {
            // プロパティを定義する                        
            public $name;
            public $height;
            public $weight;

            // メソッドを定義する
            public function set_height(string $name) {
                $this->height = $name;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // インスタンス化する
        $name = new Hoge();

        // メソッドにアクセスして実行する
        $name->set_height('height');
        $name->show_height()
        ?>
    </p>
    <p>
         <?php
         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             private $name;
             private $height;
             private $weight;
 
             // コンストラクタを定義する
             public function __construct($name, $height, $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
         }
 
         // インスタンス化する
         $user = new Animal('name', 'height', 'weight');
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($user);
         ?>
     </p>
    
 </body>
 
 </html>