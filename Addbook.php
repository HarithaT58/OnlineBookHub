<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Book Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="Addbook.css" rel="stylesheet" type="text/css" /></head>
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
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<div class="entry" >
				<form action='' method='POST'>
				
						<br><b>Book Name:</b><br>
						<input type='text' name='bookname' size='40'>
						<br><br>

						<b>Author:</b><br>
						<input type='text' name='author' size='40'>
						<br><br>
						
						<b>Edition:</b><br>
						<input type='text' name='edition' size='40'>
						<br><br>
						
						<b>Pages:</b><br>
						<input type='text' name='pages' size='40'>
						<br><br>
						
						<b>Price:</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
						
						<b>Image:</b><br>
						<input type='file' name='image' size='35'>
						<br><br>
	
						
						<input  type='submit'  value='   OK   ' name='submit' >
				</form>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</body>
</html>