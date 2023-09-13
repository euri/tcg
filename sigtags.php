<?php include "inc_header.php"; ?>
<?php
if(isset($_GET['c']))
    $cat = $_GET['c'];
else
    $cat = "";
?>
<div class="gallery">
<?php
if($cat) {
	$cat = basename($cat);
	$cat .= ".php";
	if (is_file("./sigtags/$cat")) {
		include "sigtags/" . $cat;
	} else {
		echo "The file you are looking for, $cat is missing.";
	}
} else {
	include "sigtags/default.php";
}
?>
</div>
<?php include "inc_footer.php"; ?>