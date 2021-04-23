<?php 
	include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
body{
	background-color: #cca437c2;
	font-family:'Exo', sans-serif;
}
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #723a068a;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: rgba(0, 0, 0, 0.973);
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #af844cc5;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: rgb(175, 138, 14);
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: fixed;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #cca437c2;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #cca437c2;
  color: black;
}
/* Style the "active" element to highlight the current page */


/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
</style>
<body>
<div class="topnav">
        <a href="home.php">Book Hub</a>
        <input type="text" placeholder="Search..">
      </div>
<div class="sidebar">
    <a class="active" href="home.php">Home</a>
    <a href="buyerprofile.html">My Profile</a>
    <a href="cart.php">My Cart</a>
    <a href="orderpage.php">My Orders</a>
    <a href="frontpage.html">Logout</a>
  </div>
<div class="container">
<br><br><br>
  <div class="row">
			<?php 
			$sql="select * from addbook";
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '
   <div class="col-sm-3 col-lg-3 col-md-3 text-center">
    
     <center><img src="images/'. $row['image'] .'" alt="" class="img-responsive" ></center>
     <p><strong><a href="#">'. $row['bookname'] .'</a></strong></p>
     <p><strong><a href="#">'. $row['author'] .'</a></strong></p>
     <h4 class="text-danger"> Rs.'. $row['price'] .'</h4>
	<p><a href=orderpage.html?id='. $row['sno'] .'" class="btn btn-success">Buy now</a></p>
   </div>
   ';
				}
			}
			?>
  </div>
</div>

  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  

</body>
</html>