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
    color: #666;
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
	<!-- Header -->
    <header>
        <div class="header-content-2">
            <h1>How to get in touch with us</h2>
                
                <p> Lorem ipsum dolor sit amet, vis soleat rationibus inciderint ad, eu elit iusto affert vim, ius duis definitiones an. No nam nulla dolorum, liber vocent id est. Dicam iriure ut cum, est liber malorum assentior at, civibus mentitum atomorum ne vis. Mel ea mutat epicuri scribentur, in copiosae referrentur vix. Intellegam efficiantur ei eam.

Ad alia sint iisque quo, in per unum electram. Per ferri posse quidam no. Prima atomorum principes at sit, duo in singulis adolescens, te mei saperet suscipiantur. Ne sed duis repudiandae, duo aperiri offendit et, habemus recteque in has. Duo cu dictas civibus mentitum. Nec doming vocent at, ius reque nihil eu, id dolore reformidans nam. In eam clita animal complectitur. </p>
               
            </div>
        </div>
    </header>