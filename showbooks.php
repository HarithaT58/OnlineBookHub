<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="addbook.css" rel="stylesheet" type="text/css" /></head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li><a href="Addbook.php">Addbook details</a></li>
                        <li><a href="showbooks.php">show books</a><li>
			<li><a href="ordersplaced.php">Orders placed</a><li>
			<li><style="text-align:right"><a href="adminlogout.php">Logout</a></style></li>			
		</ul>	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<marquee  direction="right" behavior="alternate"><h1>Book Hub</h1></marquee>
</div>
</div>
<!-- end header -->
</head>
<body>
     <center>
           <form action="" method="POST" encytpe="multipart/form-data">
                <table width="50%" border="1" cellpadding="5" cellspacing="5">
                      <thead>
                           <tr>
                              <th>SNO</th>
                              <th>BOOK NAME</th>
                              <th>AUTHOR</th>
                              <th>EDITION</th>
                              <th>PAGES</th>
                              <th>PRICE</th>
                              <th>IMAGE</th>
                           </tr>
                      </thead>
                      <?php
                          $con=mysqli_connect("localhost","root","");
                          $db=mysqli_select_db($con,'bookhub');
                          
                          $query="SELECT * FROM `addbook`";
                          $query_run=mysqli_query($con,$query);
                          
                          while($row=mysqli_fetch_array($query_run))
                          {
                            ?>
                            <tr>
                               <td> <?php echo $row['sno']; ?> </td>
                               <td> <?php echo $row['bookname']; ?> </td>
                               <td> <?php echo $row['author'] ?> </td>
                               <td> <?php echo $row['edition']; ?> </td>
                               <td> <?php echo $row['pages']; ?> </td>
                               <td> <?php echo $row['price']; ?> </td>
                               <td> <?php echo '<img src="images/'.$row['image'].'" width:"100px;" height: 100px;" alt="Image">'?> </td>
                            </tr>
                            <?php 
                          }
                      ?>
                </table>
           </form>
     </center>
</body>
</html>