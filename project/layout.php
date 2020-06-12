
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><?= $title ?></title>
</head>
<body>

<header>
        <div class="row">
            <ul>
                <a href="">Business</a>
                <a href="">Entertainment </a>
                <a href="">Health</a>
                <a href="">Science</a>
                <a href="">Sports</a>
                <a href="">Technology</a>
            </ul>
            <ul>
            <a href="index.php?code=Afrique">Afrique </a>
            <a href="index.php?code=Europe">Europe </a>
            <a href="index.php?code=Asie">Asie</a>
            <a href="index.php?code=Amerique">Amerique </a>
            <a href="index.php?code=Orient">Orient</a>
            </ul>
        </div>
    </header>
   



   <?php

   if(!empty($content)){
       echo $content;
   }
   
   ?>


   <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<script type="text/javascript" src="news.js"></script>
</body>
</html>