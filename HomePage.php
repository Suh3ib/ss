<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Kumbh Sans' rel='stylesheet'>
<style>
body {
  font-family: 'Kumbh Sans';font-size: 15px;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #364f6b;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  width: 100%;
}
</style>
</head>
<body>

<div class="about-section">
<p><img src="logo2.png" alt="logo" style="width:10%"></p>
  <h1>Student Services</h1>
 
  <p><?php
$us = $_POST ['us'];
echo "<h3>Welcome, $us !</h3> ";
?> </p>
<!-- ID get from database -->
  <p>Your ID:      </p>
</div>

<h2 style="text-align:center">Our Services</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Calculate your cumulative GPA</h2>
        <p><table style="width:100%">
  <tr>
    <th>Course</th>
    <th>Grade</th>
    <th>Credits</th>
  </tr>
  <!-- All course names and degrees are for clarification only, then they will be fetched from the database -->
  <tr>
  <form action="C-GPA.php" method="post">
    <td>Course 1</td>
    <td><select  name="Grade1">
    <option value="4">A</option>
    <option value="3.7">A-</option>
    <option value="3.3">B+</option>
    <option value="3">B</option>
    <option value="2.7">B-</option>
    <option value="2.3">C+</option>
    <option value="2">C</option>
    <option value="1.7">C-</option>
    <option value="1">D</option>
    <option value="0">F</option>
  </select></td>
    <th><input type="number" class="text" name="c1" placeholder="Credits.." tabindex="1" required /></th>
  </tr>
  <tr>
    <td>Course 2 </td>
    <td><select  name="Grade2">
    <option value="4">A</option>
    <option value="3.7">A-</option>
    <option value="3.3">B+</option>
    <option value="3">B</option>
    <option value="2.7">B-</option>
    <option value="2.3">C+</option>
    <option value="2">C</option>
    <option value="1.7">C-</option>
    <option value="1">D</option>
    <option value="0">F</option>
  </select></td>
    <th><input type="number" class="text" name="c2" placeholder="Credits.." tabindex="1" required /></th>
  </tr>
  <tr>
    <td>Course 3</td>
    <td><select  name="Grade3">
    <option value="4">A</option>
    <option value="3.7">A-</option>
    <option value="3.3">B+</option>
    <option value="3">B</option>
    <option value="2.7">B-</option>
    <option value="2.3">C+</option>
    <option value="2">C</option>
    <option value="1.7">C-</option>
    <option value="1">D</option>
    <option value="0">F</option>
  </select></td>
    <th><input type="number" class="text" name="c3" placeholder="Credits.." tabindex="1" required /></th>
  </tr>
  <tr>
    <td>Course 4</td>
    <td><select  name="Grade4">
    <option value="4">A</option>
    <option value="3.7">A-</option>
    <option value="3.3">B+</option>
    <option value="3">B</option>
    <option value="2.7">B-</option>
    <option value="2.3">C+</option>
    <option value="2">C</option>
    <option value="1.7">C-</option>
    <option value="1">D</option>
    <option value="0">F</option>
  </select></td>
    <th><input type="number" class="text" name="c4" placeholder="Credits.." tabindex="1" required /></th>
  </tr>
  <tr>
    <td>Course 5</td>
    <td><select  name="Grade5">
    <option value="4">A</option>
    <option value="3.7">A-</option>
    <option value="3.3">B+</option>
    <option value="3">B</option>
    <option value="2.7">B-</option>
    <option value="2.3">C+</option>
    <option value="2">C</option>
    <option value="1.7">C-</option>
    <option value="1">D</option>
    <option value="0">F</option>
  </select></td>
    <th><input type="number" class="text" name="c5" placeholder="Credits.." tabindex="1" required /></th>
  </tr>
</table></p>
        <p><input class="button" type="submit" value="Go" /></p>
</form>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Email writer</h2>
        <p><form action="E-writer.php" method="post">
      <input type="Text" class="text" name="trn" placeholder="The recipient's name" tabindex="2" required /> <br><br>
      <input type="Text" class="text" name="ur" placeholder="Your name" tabindex="2" required /> <br><br>
    <select  name="sg" required>
    <option value="Mr." >Male</option>
    <option value="Ms.">Femal</option>
  </select> <br><br>
      <textarea required name="message" rows="10" cols="43.3" placeholder="write the massage"></textarea>
  
      <input class="button" type="submit" value="Go" /></p>
</form>
      </div>
    </div>
  </div>
  

</body>
</html>
