<!Doctype html>
<html>
<html lang="en">
<head>
<title> Login</title>
<link rel=stylesheet type="text/css" href="Living.css">
<meta charset="UTF-8">
<meta name="viewport"
content="width=device=width,inital=scale=1">

<body>
        <center>  <img class="Rooted" src="CHRI LY-4-cutout.png" alt="Logo">
            <div class ="LI">
            <p>
                Living Christly Rooted.<br>Colossians 2:6-7
            </p>
        </div></center>
    <form action = "process.php" method ="POST">
          
            <div class="container">
                   <center> <h1>Login</h1>
              <label for="usernmae"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="usernmae" required>
          
              <br><label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <br><button type="submit" name="login" class="button">Login</button>
            
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
            </div>
          </form>
          <center><a href="signup.php"><button type="submit" class="button">Sign Up</button></center>
          
    
</body>
</html> 