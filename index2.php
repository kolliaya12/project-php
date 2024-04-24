<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>inscription</title>
</head>
<body>
<div id="form">
      <h1>sign up now</h1>
      <form name="form" action="traitement_inscription.php" method="POST">
         <label>Username: </label>
         <input type="text" id="user"name="user"><br><br>
         <label>Password:</label>
         <input type="password" id="pass"name="pass"><br><br>
         <label>Email: </label>
         <input type="text" id="email"name="email"><br><br>
         <input type="submit"id="btn" value="sign up" name="submit"/>
     </form>
</div>
</body>
</html>