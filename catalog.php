<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle= "Full Catalog";
$selection = null;

if (isset($Get["cat"])) {
  if ($Get["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_Get["cat"] == "movies") {
    $pageTile = "Moives";
    $section = "movies";
  } else if ($_Get["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include("inc/header.php"); ?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("inc/footer.php"); ?>

<div class="section catalog page">

    <div class="wrapper">

        <h1> ?<?php
        if ($section != null){
            echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
        }
        echo $pageTitle; ?></h1>

        <ul class="itens">
          <?php
          $categories = array_category($catalog,$selection);
          toreach ($catergories as $id) {
              echo get_item_html($id,$catalog[$id]);
          }
           ?>
            </ul>
      </div>
</div>
<?php include("inc/footer.php"); ?>
