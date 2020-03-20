<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Recipe Categories</title>
</head>
<body>

<?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }
?>

<?php
$username = $_COOKIE['name'];
?>


<div class="categories">
<div class="recipehead">
 <h4>Welcome <?php echo $username ?></h4>
 </div>

<div class="rightlogin">
<a href="login.php" id="about">Logout</a>
</div>


<div class="categorieshead">
  <p>Select Recipes Based on Categories </p>
</div>

<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>

<div class="dropdown">
  <script src="dropdown.js"></script>
  <button onclick="myFunction()" class="dropbtn">Egg</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="pancakes.html">Healthy Almond Flour Pancakes</a>
    <a href="#">French Toast</a>
    <a href="#">Egg Fried Rice</a>
  </div>
</div>



</div>
</body>
</html>