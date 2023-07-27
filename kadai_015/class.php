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

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
            public function show_price() {
                echo $this->price;
            }
        }

        // インスタンス化する
        $name = new Food('name', 60);

        // インスタンス$nameの各プロパティの値を出力する
        print_r($name);
        echo '<br>';

        // メソッドにアクセスして実行する
        $name->show_price();
        ?>
    </p>
     <p>
     <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            public $name;
            public $height;
            public $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, string $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            }

            // メソッドを定義する
            public function show_height() {
                echo $this->height;
            }
        }

        // インスタンス化する
        $name = new Animal('height', 250, 'weight');

         // インスタンス$nameの各プロパティの値を出力する
         print_r($name);
         echo '<br>';

        // メソッドにアクセスして実行する
        $name->show_height()
        ?>
    </p>
    
 </body>
 
 </html>