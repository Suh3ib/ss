<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Kumbh Sans' rel='stylesheet'>
  
  <title>C-GPA</title>
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
    <h4 style="color:red;">Note\ Take first 3 number e.g : 3.65</h4>
    <hr>
    <?php
$gr1 = $_POST['Grade1'];
$gr2 = $_POST['Grade2'];
$gr3 = $_POST['Grade3'];
$gr4 = $_POST['Grade4'];
$gr5 = $_POST['Grade5'];
$cr1 = $_POST['c1'];
$cr2 = $_POST['c2'];
$cr3 = $_POST['c3'];
$cr4 = $_POST['c4'];
$cr5 = $_POST['c5'];
$gr1cr1 = $gr1 * $cr1;
$gr2cr2 = $gr2 * $cr2;
$gr3cr3 = $gr3 * $cr3;
$gr4cr4 = $gr4 * $cr4;
$gr5cr5 = $gr5 * $cr5;
$sumgrcr = $gr1cr1 + $gr2cr2 + $gr3cr3 + $gr4cr4 + $gr5cr5;
$sumcr =  $cr1 +  $cr2 +  $cr3 +  $cr4 +  $cr5;
$CGPA = $sumgrcr / $sumcr ; 

echo "Your CGPA = $CGPA";
?> 
<hr>

  </center>

</div>






  

  
</body>
</html>