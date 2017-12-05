<html>
<head>
<title><?php echo "My Online Collection"; ?></title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<div class="header">

  <div class="wrapper">

    <h1 class="branding-title"><a href="./">My Online Collection</a></h1>

    <ul class="nav">
              <li class="books<?php if ($selection == "books") {echo " on"; } ?>">
                <a href="catalog.php?cat=books">Books</a></li>
              <li class="movies<?php if ($selection == "movies") { echo " on"; } ?>">
                <a href="catalog.php?cat=movies">Movies</a></li>
              <li class="music<?php if ($selection == "music") { echo " on";} ?>">
                <a href="catalog.php?cat=music">Music</a></li>
              <li class="suggest><?php if ($selection == "suggest") { echo " on";} ?>">
                <a href="catalog.php?cat=suggest">Suggest</a></li>
          </ul>

        </div>

      </div>

      <div id="content">
