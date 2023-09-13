<h1>Trade Log</h1>
<p class="center">This page lists my trade logs for the current month.<br /> 
  To view past trade logs, <a href="https://beyond-eternal.blogspot.com/search/label/TCG%20Logs" target="_new">click here</a>.</p>
<p class="center"><a href="https://tcginse.ingerssite.de" target="_blank"><img src="https://cdn.beyondeternal.com/tcg/events/2018/04/adopt/in-tourdefrance-LPP-tcg.gif" alt="" title="Adoption by Inger" border="0" /></a></p>

<?php
    $feed_url = "http://beyond-eternal.blogspot.com/feeds/posts/default/-/TCG%20Logs";
    $invalidurl = false;
    if(@simplexml_load_file($feed_url)){
        $feeds = simplexml_load_file($feed_url);
    }else{
        $invalidurl = true;
        echo "<h2>Invalid RSS feed URL.</h2>";
    }

    $i=0;
    if(!empty($feeds)){
        foreach ($feeds->entry as $item) {
            if($i >= 1) break;
    ?>
            <div class="center">
                <h2><?= $item->title; ?></h2>
                <div class="content"><?= $item->content; ?></div>
            </div>

            <?php
            $i++;
        }
    }else{
        if(!$invalidurl){
            echo "<h2>No item found</h2>";
        }
    }
?>
