<?php
    $feed_url = "http://beyond-eternal.blogspot.com/feeds/posts/default/-/TCG";
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
            if($i >= 5) break;
    ?>
            <div class="feed">
                <h2><a href="<?= $item->link[4]['href']; ?>" target="_blank"><?= $item->title; ?></a></h2>
                <div class="date"><?= date('l, F j, Y', strtotime($item->published)); ?></div>
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
