<?php include "inc_header.php"; ?>
<?php
if(isset($_GET['p']))
    $page = $_GET['p'];
else
    $page = "";

if(isset($_GET['c']))
    $card = $_GET['c'];
else
    $card = "";
?>
<h1>Mastercards <?php echo ($page == 'all') ? 'All' : $page ?></h1>
<div style="text-align:center;">
    
<?php
if($page) {
	$page = basename($page);
	$page .= ".php";
	if (is_file("./mastercards/$page")) {
		include "mastercards/" . $page;
	} else {
		echo "The file you are looking for, $page is missing.";
	}
}
?>
<?php
    if($card) {
        $cardarr = explode("_", $card);
?>
    <p><a href="javascript:history.go(-1)">&laquo; back</a></p>
    <h2><?php echo $card; ?></h2>
    <p><img src="https://cdn.beyondeternal.com/tcg/cards/completed/<?php echo $card; ?>/x<?php echo $cardarr[0]; ?>_MASTERCARD.gif" /></p>
    <p>
    <?php
        $cardno = intval(substr($cardarr[0], 4, 1));
        $cardname = substr($card, 0, 4);

        if($cardno == 0)
            $ctr = 0;
        else
            $ctr = ($cardno * 10) - 10;        

        $max = $ctr + 9;

        while($ctr <= $max) {
            $ctr++;
            if($ctr < 10)
                $filename = "0".$ctr;
            else
                $filename = $ctr;    
        ?>
        <img src="https://cdn.beyondeternal.com/tcg/cards/completed/<?php echo $card; ?>/<?php echo $cardname; ?><?php echo $filename; ?>.gif" />
        <?php if($ctr %5 == 0) { ?><br /><?php } ?>
        <?php
        }
        ?>
    </p>
<?php
    }
    
    if(!$card && !$page) {
        include "mastercards/default.php";
    }
?>
</div>
<?php include "inc_footer.php"; ?>