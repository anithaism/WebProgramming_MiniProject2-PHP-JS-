<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Recipe Index</title>
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

<div class="recipeindex">
<div class="recipehead">
 <h4>Welcome <?php echo $username ?></h4>
 </div>

<div class="rightlogin">
<a href="login.php" id="about">Logout</a>
</div>
  

<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>


<div class="container">
 <div class="row1c1">
      <a href="pancakes.html"><img src="pancake.jpeg">
      <div class="hovertextr1c1">
      Go to Recipe page
      </div></a>
   <BR><p>Almond Flour Pancakes</p>
   </div>

 <div class="row1c2">
      <a href="maccheese.html"><img src="maccheese.jpg">
      <div class="hovertextr1c2">
      Go to Recipe page
      </div></a>
   <BR><p>Avocado Mac & Cheese</p>
 </div>

 <div class="row1c3">
      <a href="muffin.html"><img src="muffin.jpg">
      <div class="hovertextr1c3">
      Go to Recipe page
      </div></a>
   <BR><p>Banana Muffins</p>
 </div>

</div>
</div>
</body>
</html>