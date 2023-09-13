<?php include "inc_header.php"; ?>
<h1>Game 2: Unscramble the Word</h1>
<div class="center">
<p class="note">
    <strong>Note:</strong> These games are for TCG members only.<br />
    You will not be able to use the prizes here if you're not a TCG member anyway.
</p>
<?php
//--  Question 1
if ($_GET['scramble'] == '1') {    
    if ($_POST['txt_q1'] == "seaweed") {
    ?>
    <p><strong>You got the answer right!</strong></p>
    <p>Click the image below to get your reward.</p>
    <p><a href="http://cdn.beyondeternal.com/tcg/events/2020/07/prizes/be_jul20_gameprize_scramble.gif" target="_blank"><img src="http://cdn.beyondeternal.com/tcg/events/2020/07/prizes/be_jul20_gameprize_scramble.gif" alt="" border="0" /></a></p>
    <?php
    } else if (empty($_POST['txt_q1'])) {
        echo "<p>There's an empty input box. Please answer all the questions.</p><p>Please <a href=\"javascript: history.back(-1)\">go back here</a> to try again.</p>";
    
    } else {
        echo "<p style=\"color: #c00;\">Wrong answer!</p><p>Please <a href=\"javascript: history.back(-1)\">go back here</a> to try again.</p>";
    }
}
?>

<?php
    if (!isset($_POST['submit'])) {
    if ($_GET['scramble'] != "1") {
?>
    <p>
        <strong>Unscramble this word:</strong> easedwe
    </p>
    <form name="form" id="form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>?scramble=1">
        <p>
            <strong>Answer: </strong> 
            <input type="text" name="txt_q1" id="text_q1" />
        </p>
        <p><input type="submit" name="submit" value="Submit" class="button" /></p>
    </form>
<?php } } ?>
</div>
<script>
$("#text_q1").bind('keyup', function (e) {
    if (e.which <= 97 && e.which <= 122) {
        var newKey = e.which + 32;
        e.keyCode = newKey;
        e.charCode = newKey;
    }

    $("#text_q1").val(($("#text_q1").val()).toLowerCase());
});
</script>
<?php include "inc_footer.php"; ?>