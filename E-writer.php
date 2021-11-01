<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Kumbh Sans' rel='stylesheet'>
  
  <title>E-writer</title>
</head>
<style>
   html, body {
  align-items: center;
  font-family: 'Kumbh Sans';font-size: 22px;
  border: 0;
  display: flex;
  font-size: 16px;
  height: 100%;
  justify-content: center;
  margin: 0;
  padding: 0;



}


.solid {

  border-radius: 5px;
  padding: 20px;
  text-align: left;
  align-items: center;
  background-color: #f2f2f2;
  width: 100%;
}
</style>
<body>
<div>
  <center class="solid">
  
    <h4 style="color:red;">Select the text at the below and then Ctrl + C to copy the text</h4>
    <hr>
    <?php
$trn = $_POST['trn'];
$sg = $_POST['sg'];
$message = $_POST['message'];
$ur = $_POST['ur'];

echo "<h4>Hi $sg $trn, <br><br> $message <br><br><br> Thank you so much <br><br> Sincerely <br> $ur  </h4>"
?> 
<hr>
  </center>

</div>






  

  
</body>
</html>