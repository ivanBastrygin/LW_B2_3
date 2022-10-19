<?php
    session_start();
   if ($_SESSION['id']) {
       
        $id = $_SESSION['id'];
  }
 else{
    header('Location:index.php');
 }
   include "vendor\connect.php";
$content_article = mysqli_query($connect, "SELECT * from `content` where `id_users` = '$id'");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
   
</head>
<body>
    <?php 
while ($article = mysqli_fetch_assoc($content_article)) {
echo'<p>'.$article['header'].'</p>';
echo'<p>'.$article['content'].'</p>';
}
?>
          <form   action="vendor/logout.php" method="post" class="form_enter">
                <button >Выйти</button>
            </form>    

</body>
</html>

