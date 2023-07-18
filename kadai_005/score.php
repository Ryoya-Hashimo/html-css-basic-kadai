<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題5</title>
</head>

<body>
  <?php
    // 合計点を求める
    $aryHoge = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
    $fuga = array_sum($aryHoge);
    echo $fuga;
    echo '<br>';

    // 平均点を求める
    $aryHoge = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
    $fuga = array_sum($aryHoge) / count($aryHoge);
    echo $fuga;
    ?>
    
</body>

</html>