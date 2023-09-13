
<h1>Certificates</h1>
<p class="center">
    These are the certificates I have that I have not traded yet.<br />
    Please see my <a href="<?php echo $url ?>/tcg.php?p=default">Trade Logs</a> to see the certis I have already claimed.
</p>
<?php
    $directory = "certi/";
?>
<p class="center">
<?php
$images = glob($directory . "*.*", GLOB_BRACE);

foreach ($images as $image) {
    echo '    <img src="'.$image.'" alt="" border="0" />
';
}
?>
</p>