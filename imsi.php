<?php

$FILES['photo']['name'] = 'son.jpg';
$id = 'zzz';
$arr = end(explode('.', $_FILES['photo']['name']));
$ext = end($tmparr);

$photo = $id .'.'. $ext;

echo $photo;