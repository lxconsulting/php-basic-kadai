<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題011</title>
</head>

<body>
  <p>
    <?php
    $vegetable_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($vegetable_data as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
    ?>
  </P>
</body>
</html>