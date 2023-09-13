<?php include "inc_header.php"; ?>
<?php
if(isset($_GET['p']))
    $page = $_GET['p'];
else
    $page = "";
?>
<div id="tcg">
<?php
if($page) {
	$page = basename($page);
	$page .= ".php";
	if (is_file("./tcg/$page")) {
		include "tcg/" . $page;
	} else {
		echo "The file you are looking for, $page is missing.";
	}
} else {
	include "tcg/default.php";
}
?>
</div>
<?php include "inc_footer.php"; ?>