<!DOCTYPE html>
<?php
//Step1
 $db = mysqli_connect('localhost','root','','e-book')
 or die('Error connecting to MySQL server.');
?>
<html>
<head>
<meta charset="utf-8">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

<link rel="stylesheet" href="style.css" type="text/css" />
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
	
	<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}
li {
    float: left;
}
li a {
    display: block;
    color: #000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #ddd;
}
li a.active {
    color: white;
    background-color: #4CAF50;
}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="viewall.php">Products</a>
                    </li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
					 <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
            </div>
        </div>
     </nav>
	 <header>
      <div class="header-content-1">   
<center><h2>Click on a book below to view summary</h2></center>
 <ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Lady of the lake')">Lady of the Lake</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'The Last Wish')">The Last Wish</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Sword of Destiny')">Sword of Destiny</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Seasons of Storms')">Seasons of Storms</a></li>
    <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Blood of the Elves')">Blood of the Elves</a></li>
	    <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'The Tower of Swallow')">The Tower of Swallow</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Baptism of Fire')">Baptism of Fire</a></li>
</ul>
<div id="Lady of the lake" class="tabcontent">
<h3>Lady of the Lake</h3>
  <?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books where BookID = 2");
print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print ' '.$row["BookDescription"].' ';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection
$mysqli->close();
?>
 <center><h2><img style="max-width:95%;border:6px groove #545565;" src="lady.jpg" alt="Lady of the Lake" width="300" height="300"></h2>
 
 <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Lady of the Lake">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>

</center>
</div>

<div id="The Last Wish" class="tabcontent">
<h3>The Last Wish</h3>
   <?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books where BookID = 1");
print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print ' '.$row["BookDescription"].' ';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection
$mysqli->close();
?>
<center><h2><img style="max-width:95%;border:6px groove #545565;" src="wish.jpg" alt="The Last Wish" width="300" height="300"></h2>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Lady of the Lake">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
</center>
</div>

<div id="Sword of Destiny" class="tabcontent">
  <h3>Sword of Destiny</h3>
   <?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books where BookID = 3");
print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print ' '.$row["BookDescription"].' ';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection
$mysqli->close();
?>
<center><h2><img style="max-width:95%;border:6px groove #545565;" src="sword.jpg" alt="The Last Wish" width="300" height="300"></h2>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="The Last Wish">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
 </center>
</div>
<div id="Seasons of Storms" class="tabcontent">
  <h3>Seasons of Storms</h3>
 
   <?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books where BookID = 4");
print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print ' '.$row["BookDescription"].' ';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection
$mysqli->close();
?>
 <center><h2><img style="max-width:95%;border:6px groove #545565;" src="storm.jpg" alt="Season of Storms" width="300" height="300"></h2>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Seasons of Storms">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
 </center>
 
 </div>
 <div id="Blood of the Elves" class="tabcontent">
  <h3>Blood of the Elves</h3>
 
   <?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books where BookID = 7");
print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print ' '.$row["BookDescription"].' ';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection
$mysqli->close();
?>
 <center><h2><img style="max-width:95%;border:6px groove #545565;" src="elves.jpg" alt="Blood of the Elves" width="300" height="300"></h2>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Blood of the Elves">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
 </center>
 
 
</div>
<div id="The Tower of Swallow" class="tabcontent">
  <h3>The Tower of Swallow</h3>
 <?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books where BookID = 5");
print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print ' '.$row["BookDescription"].' ';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection
$mysqli->close();
?>
 <center><h2><img style="max-width:95%;border:6px groove #545565;" src="swallow.jpg" alt="Swallow" width="300" height="300"></h2>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Tower of Swallow">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
 </center>
 
</div>
<div id="Baptism of Fire" class="tabcontent">
 <h3>Baptism of Fire</h3>
 <?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books where BookID = 6");
print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print ' '.$row["BookDescription"].' ';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();
// close connection
$mysqli->close();
?>
  <center><h2><img style="max-width:95%;border:6px groove #545565;" src="baptism.jpg" alt="Baptism of Fire" width="300" height="300"></h2>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Baptism of Fire">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>
</center>
<footer>

</footer>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</header>
</body>
</html>