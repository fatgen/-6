<?php
// 24時間単位の現在時
$hour = date('G');


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
  <body class="<?php if (6 <= $hour && $hour <= 17): ?>day<?php else: ?>night<?php endif ?>">
  <h1   class="<?php if (6 <= $hour && $hour <= 17): ?>day<?php else: ?>night<?php endif ?>">昼と夜でページの見た目が変わります。</h1>
  </body>
</html>
