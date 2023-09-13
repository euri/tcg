<?php include "../inc_header.php"; ?>
<?php
if(isset($_GET['p']))
    $page = $_GET['p'];
else
    $page = "";
?>
<div class="center">
<?php if($page != ""): ?>
<p><img src="https://cdn.beyondeternal.com/tcg/layout/cherish_heart01e.gif" alt="" border="0" /> <a href="2022.php">Click here to go back</a> <img src="https://cdn.beyondeternal.com/tcg/layout/cherish_heart01e.gif" alt="" border="0" /></p>
<?php endif; ?>
    
<?php
if($page) {
    $page = basename($page);
    $page .= ".php";
    if (is_file("./2022/$page")) {
        include "2022/" . $page;
    } else {
        echo "The file you are looking for, $page is missing.";
    }
} else {
    include "2022/default.php";
}
?>
</div>
<?php include "../inc_footer.php"; ?>