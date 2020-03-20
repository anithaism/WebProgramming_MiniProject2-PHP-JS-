<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Discussion Forum</title>
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


<div class="forum">

<div class="discussionhead">
<p>Post your Queries here</p>
</div>

<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>

<div class="rightlogin">
<a href="login.php" id="about">Logout</a>
</div>



<div class="formtopost">
<form method="post">
<p>Your E-mail Address:</p>
<input type="text" name="topic_owner" size=40 maxlength=150>
<p>Query Title:</p>
<input type="text" name="topic_title" size=40 maxlength=150>
<p>Post Your Query Here:</p>
<textarea name="post_text" rows=8 cols=40 wrap=virtual></textarea>
<P><input type="submit" name="submit" value="Add Topic"></p>
</form>
</div>

</div>


</body>
</html>