<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link type="text/css" rel="stylesheet" href="#" />
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
$num = 0;
for($counter = 0; $counter < 10001;$counter++){
    $userPIN = $_GET['pin'];
    $num++;
    $num_padded = sprintf("%04d", $num);
    $encrypted = md5($num_padded);
    if($encrypted == $userPIN){
     break;
    }
}
echo "got'em!"."<br><br>"."You PIN is:$num_padded"."<br><br>"."<button onclick='decryptMoar()'>Decrypt Moar!</button><script>function decryptMoar(){window.location.href = 'http://localhost/decrypt.html'}</script>";

?>
    <!--Start Of JavaScript Code-->
    <script></script>
</body>
</html>