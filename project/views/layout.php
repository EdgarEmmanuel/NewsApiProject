
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?=SRC_IMG."/favicon.ico"?>" type="image/x-icon">
    <link rel="icon" href="<?=SRC_IMG."/favicon.ico"?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= $css ?>">
    <title><?= $title ?></title>
</head>
<body>

   
   <?php

   if(!empty($content)){
       echo $content;
   }
   
   ?>


<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script type="text/javascript" src="<?= $js ?>"></script>
</body>
</html>