<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Kumbh Sans' rel='stylesheet'>
  
  <title>Login Page</title>
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
h1 {
  text-align: center;
}
span {
  text-align: center;
  color: #707070;
}

input[type=submit] {
  width: 100%;
  background-color: #364f6b;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #707070;
}
input[type=text] {
  width: 88%;
  padding: 14px 20px;
  margin: 8px 0;
  border-color: #364f6b;
  border-radius: 4px;
  cursor: pointer;
}
input[type=password] {
  width: 88%;
  padding: 14px 20px;
  margin: 8px 0;
  border-color: #364f6b;
  border-radius: 4px;
  cursor: pointer;
}
div {
  border-radius: 5px;
  padding: 20px;
  text-align: center;
  background-color: #f2f2f2;
}
</style>
<body>
  <!-- use database to get valid access -->
<div>
<form action="HomePage.php" method="post">
<img src="logo.png" alt="logo" style="width:40%">
  <h1 class="h1">Welcome Back</h1>
  <span class="span">Enter your username and password to use the services.</span>
  <div>
  <input type="text" class="text" name="us" placeholder="Username" tabindex="1" required /> <br>
      <input type="password" class="password" name="ps" placeholder="Password" tabindex="2" required /> <br>
  <input type="submit" value="Login" />
</form>
</div>



  

  
</body>
</html>