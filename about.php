<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
      if($_POST['abandon']=="true")
      {
        session_unset();
        header("location: index.html");
      }
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>About...</title>
</head>
<body>
<?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }
?>

<div class="aboutpage">
  <div class="abouthead">
    <h4>Welcome <?php echo $_SESSION["username"] ?></h4>
  </div>
   <div class="rightlogin">
<a href="login.php" id="about">Logout</a>
</div>

<div class="untilend">
<script>
<?php include 'untilend.js';?>
</script>
</div>

  <div class="aboutpara">
   
    <p><BR>Cooking for kids is tricky at its best! <BR>They reject for all sorts of reasons: texture, spice, ingredients...<BR>Its our responsibility to make sure our kids eat healthy foods and<BR> develop healthy eating habits.<BR><BR> This website allows you to select ingredients (what you have at home) for a recipe and gives the recipe based on that. I am sure your kids will enjoy healthy eating.<BR><BR> Happy Cooking!!! <BR><BR><BR>-Anitha Subramanian
  </div>


<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>

 
</div>

</body>
</html>