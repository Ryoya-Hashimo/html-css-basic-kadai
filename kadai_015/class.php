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
        class Food {
            // プロパティを定義する                        
            public $name;
            public $price;

            // メソッドを定義する
            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }
        }

        // インスタンス化する
        $name = new Food();

        // メソッドにアクセスして実行する
        $name->set_name('name');
        $name->show_name()
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