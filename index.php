<?php
error_reporting(0);
require_once './bbcode.php';
require "scssphp/scss.inc.php";
require 'Models/Post.php';
require 'Models/User.php';

$post = new Post;
$scss = new scssc();
$user = new User;

$directory = "stylesheets";
$scss->setImportPaths("scss/");
$scss->setVariables(array(
'color' => "#f1aaaa"
));
echo "<style>".$scss->compile('@import "main.scss"')."</style>";





?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


  <div id="Sidebar" class="column">
    <h1>elo</h1>
    <h1>elo</h1>
    <h1>elo</h1>
    <h1>elo</h1>
  </div>

  <div id="Posts" class="Posts">
    
  
    <?php
      $post->getPostsStyled(false);
      $user->Login("ADmin", 'MamaMama1');
      //$user->Register("ADmin","maszynista91@gmail.com", "MamaMama1");
      if(isset($_SESSION['error_mail'])){
        echo $_SESSION['error_mail'];
        unset($_SESSION['error_mail']);
      } else if(isset($_SESSION['error_nick'])){
        echo $_SESSION['error_nick'];
        unset($_SESSION['error_nick']);
      }else if(isset($_SESSION['error_pass'])){
        echo $_SESSION['error_pass'];
        unset($_SESSION['error_pass']);
      }
    ?>
  </div>

</body>
</html>
