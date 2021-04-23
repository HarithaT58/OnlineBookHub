<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="register.css"> 
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
    <h1 align="center">Register</h1>
    <div class="two">
    <form action="frontpage.html" method="POST">
        <label for="firstname">First Name</label>
        <br>
        <input type="text" id="firstname" name="firstname" placeholder="firstname" required="required"><br><br>
        <label for="lastname">Last Name</label>
        <br>
        <input type="text" id="lastname" name="lastname" placeholder="lastname" required="required"><br><br>
        <label for="email">Email address</label>
        <br>
        <input type="email" id="email" name="email" placeholder="email" required="required"><br><br>
        <label for="password">Password</label>
        <br>
        <input type="password" id="password" name="password" placeholder="password" required="required"><br><br>
        <label for="phonenumber">Phone Number</label>
        <br>
        <input type="number" id="phonenumber" name="phonenumber" placeholder="phonenumber" required="required"><br><br><br>
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>
