<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <style>
      body{
        background-image:url(https://media.wired.com/photos/5ed182a398c8634b22aaa907/master/pass/Gear-Working-Offline-1220955481.jpg);
        background-size:cover;
      }
      form{
        margin-top:6em;
        margin-left:30em;
        margin-right:10em;
        padding:30px ;
        box-shadow: 10px 10px 8px 10px #888888;
        background-color:aqua;
      }
    </style>
</head>
<body>
<form action="config1.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <a href="index.php"><input type="submit" class="btn btn-primary" name="submit"></a><br>
  New User?<br>Create Account Here <a href="register.php">Register</a>
</form>
</body>
</html>