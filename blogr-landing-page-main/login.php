
<?php

if(isset($_POST['submit'])){
 $username = $_POST['username'];
 $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'blogrmain');
    

    $query = "INSERT INTO loginsheet(log_username,log_password) ";
    $query .= "VALUES ('$username','$password')";
    
   $result = mysqli_query($connection, $query);
    if(!$result){
        die("query failed" . mysqli_error());
    }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  </head>
  <body id="login">

  <div class="text-center">
        <h1>Enter Your Login Details Here:</h1>


</div>
         <div class="form-move">
        <form class="login-form" action="login.php" method="post">
          <input class="login-input" type="text" name="username" value="" placeholder="Enter Username:">
          <br>
          <input class="login-input" type="password" name="password" value="" placeholder="Enter Password:">
          <br>
          <input type="button" class="btn btn-danger btn-lg" name="submit" value="Submit">
      </form>
       </div>
  </body>
</html>
