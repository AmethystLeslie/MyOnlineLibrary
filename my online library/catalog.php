<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "Books") {
        $pageTitle = "Books";
        $section = "Books";
    } elseif ($_GET["cat"] == "Movies") {
        $pageTitle = "Movies";
        $section = "Movies";
    } elseif ($_GET["cat"] == "Music") {
        $pageTitle = "Music";
        $section = "Music";
    }    
}


include("inc/header.php"); ?>

<div class="section calalog page">

    <div class="wrapper">
        
        <h1><?php
        if ($section !=null) {
            echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
        }
        echo $pageTitle; ?></h1>
        
        <ul class="items">
            <?php
            $catagories = array_catagory($catalog,$section);
            foreach ($catagories as $id) {
                    echo get_item_html($id,$catalog[$id]);
            }
            ?>
        </ul>
        
    </div>
</div>

<?php include("inc/footer.php"); ?>