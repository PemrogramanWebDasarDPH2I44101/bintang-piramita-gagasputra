<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TITLE</title>
    <meta name="description" content="DESCRIPTION">
   <link rel="stylesheet" href="PATH">

    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
   <form method="post">
     <label> Masukkan Angka </label>
     <input type="text" name="angka">
     <input type="submit">
   </form>
   <br>

   <?php
   error_reporting(0);
   $input = $_POST["angka"];

   for($i=0;$i<=$input;$i++){
   for($j=$input-$i;$j>=1;$j--){
   echo "* ";
   }
   echo "<br>";
   }
   ?>
</body>

</html>
