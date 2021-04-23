<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="login.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Hind&display=swap" rel="stylesheet"> 
   <style>
body {
    background-image: url('https://static.timesofisrael.com/atlantajewishtimes/uploads/2021/03/How-to-format-a-book.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>
</head>
<body>
    <h1 align="center">Log In</h1>
    <div class="one">
    <form action="buyerdashboard" method="POST">
     <label for="userid">Email:</label>
     <br>
     <input name="userid" id="email" type="email"  placeholder="your email" required="required">
     <br><br> 
     <label for="password">Password:</label><br>
     <input name="password" id ="password" type="password"  pattern=".{8,15}" required title="8 to 15 characters only" required="required"><br><br><br>
     <button type="submit" class="btn btn-success" name="submit">Login</button>
    </form>
    </div>
    

</body>
</html>