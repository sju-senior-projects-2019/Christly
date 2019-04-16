<!Doctype html>
<html>
<html lang="en">
<head>
<title> Sign up</title>
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
          
    <form action="action_page.php">
                <div class="container">
                  <center><h1>Sign Up</h1>
                  <p>Please fill in this form to create an account.</p>
                  
              
                 <p>First Name:
                     <input type="text" placeholder="Enter First Name" name="firstName" size="15" value=""/>
		         </p>

		         <p>Last Name:
			         <input type="text" placeholder="Enter Last name" name="lastName" size="15" value=""/>
		         </p>   

		         <p>Email Address:
			          <input type="text" placeholder="Enter email" name="emailAddress" size="15" value=""/>
                 </p>
                 
                 <label for="username">Username</label>
                  <input type="Text" placeholder="Enter UserName" name="usernmae" size="15" value=""/>
              
                  <br><label for="password">Password</label>
                  <input type="password" placeholder="Enter Password" name="password" size="15" value=""/>
              
                  <br><label for="psw-repeat">Repeat Password</label>
                  <input type="password" placeholder="Repeat Password" name="password-repeat" size="15" value=""/>
                  <p>Male or Female:
			     <br>
 			         <input type="radio" name="gender" value="male" > Male<br>
 			         <input type="radio" name="gender" value="female"> Female<br>
		         </p>          
                  <div class="clearfix">
                    <button type="submit" class="signupbtn">Sign Up</button>
                    
                  </div>
                </div>
        </form>
</body>
</html> 