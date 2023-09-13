<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container">  
  <form id="contact" action="./test.php" method="post">
    <h3>Login Form</h3>
   
      <input placeholder="Enter Your name" type="text" name="name" required autofocus>
    
      <input placeholder="Enter Your Email Address" type="email" name="email" required>
 
      <input placeholder="Enter Your Phone Number " type="number" name="phone" required>

      <input placeholder="Enter a password" type="password" name="pass" required>

      <input placeholder="Confrim your password" type="password" name="cpass" required>
  
      <button name="submit" type="submit" >login</button>
  </form>
</div>

</body>
</html>


