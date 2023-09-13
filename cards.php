<?php include "inc_header.php"; ?>
<?php
if(isset($_GET['p']))
    $page = $_GET['p'];
else
    $page = "";
?>
<div class="center">
    
<?php
if($page) {
    $page = basename($page);
    $page .= ".php";
    if (is_file("./cards/$page")) {
        include "cards/" . $page;
    } else {
        echo "The file you are looking for, $page is missing.";
    }
} else {
    include "cards/default.php";
}
?>
</div>
<?php include "inc_footer.php"; ?>