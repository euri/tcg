<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Euri's Gallery | Tagboard</title>
<link href="assets/winter.css" rel='stylesheet' type='text/css' />
<style type="text/css">
body {
    background: transparent;
}
</style>
</head>
<body>
<div id="tagboard">
<?php include_once $_SERVER["DOCUMENT_ROOT"]."/admin/dbconnect.php"; ?>
<?php

//-- reset
if (isset($_POST["reset"])) {
	$_POST["txt_name"] = "";
	$_POST["txt_email"] = "";
	$_POST["txt_url"] = "";
	$_POST["txt_spam"] = "";
	$_POST["txt_msg"] = "";
}

//-- sign
if (isset($_GET['mode'])) {
    if ($_GET['mode'] == "sign") {

        $error = 0;
        $errormsg = array();
        
        $name = $_POST["txt_name"];
        $email = $_POST["txt_email"];
        $url = $_POST["txt_url"];
        $msg = $_POST["txt_msg"];
        $spam = $_POST["txt_spam"];
        $date = date("y-m-d h:i:s");
        
        $msg = str_replace("|","l",$msg);
        $msg = str_replace("<","&lt;",$msg);;
        $msg = str_replace(">","&gt;",$msg);
        $msg = str_replace("&","&amp;",$msg);
                
        //--  check name
        if (empty($name)) {
            $error++;
            $errormsg[$error] = "Name field is required.";
        }
        
        //-- check email
        if (empty($email)) {
            $error++;
            $errormsg[$error] = "E-mail field is required. It will not be disclosed.";
        } else if (checkEmail($email) != 'true') {
            $error++;
            $errormsg[$error] = "Invalid E-Mail Address";
        }
        
        //-- check url
        if (!empty($url)) {
            if (substr($url, 0, 4) == "www." or substr($url, 0, 7) == "http://") {
                if (substr($url, 0, 4) == "www.") {
                    $url = "http://" . $url;
                }
            } else {
                $error++;
                $errormsg[$error] = "URL not valid.";
            }
        }
        
        //-- check msg
        if (empty($msg)) {
            $error++;
            $errormsg[$error] = "You didn't leave any message.";
        }
        
        //-- check spam
        if (empty($spam)) {
            $error++;
            $errormsg[$error] = "Spam protection field is required.";
        } else if ($spam != 'pixellove') {
            $error++;
            $errormsg[$error] = "Spam protection keyword is wrong.";
        }
        
        if ($error > 0) {
            echo "<div class=\"error\"><strong>" . $error . " errors found.</strong> They are as follows:</p><ul>";
            foreach($errormsg as $em) {
                echo "<li>".$em."</li>";
            }
            echo "</ul></div>";
            form();
        } else if ($error == 0) {
            //--  convert special characters
                $gb_msg = addslashes(htmlentities($gb_msg));
            
            //--  query: get news data
            $query = "INSERT INTO gb (gb_id, gb_name, gb_email, gb_url, gb_msg, gb_date) VALUES ('', '$name', '$email', '$url', '$msg', DATE_ADD(NOW(),INTERVAL 8 HOUR))";
            $result = mysqli_query($dbconnect, $query);		
        } else {
            echo "<p>Somethings up, it failed.</p>";
        }

        //--  check if query successful
        if($result){
            echo "<p>Successfully added!</p>";
            echo"<meta http-equiv='refresh' content='0;URL=tag-gallery.php'>";
        }
    }
}

//--  edit button not yet pressed
if (!isset($_POST["submit"])) {
form();
?>
<?php } ?>
<?php
	function checkEmail ($email) {
	
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
		
		if (preg_match($regex, $email)) {
			return true;
		} else { 
			return false;
		}
	}
	
	function form() { 
?>
<form id="signgb" name="signgb" method="post" action="tag-gallery.php?mode=sign">
    <table width="350" border="0" align="center" cellpadding="5" cellspacing="0">
        <tr>
            <td width="120"><strong>Name:</strong></td>
            <td width="200"><input name="txt_name" type="text" value="<?php echo $_POST['txt_name']; ?>" /></td>
        </tr>
        <tr>
            <td><strong>E-mail:</strong></td>
            <td><input name="txt_email" type="text" value="<?php echo $_POST['txt_email']; ?>" /></td>
        </tr>
        <tr>
            <td><strong>Site URL:</strong></td>
            <td><input name="txt_url" type="text" value="<?php echo $_POST['txt_url']; ?>" /></td>
        </tr>
        <tr>
            <td><strong>Anti-Spam:</strong><br/> <span class="sub">Type 'pixellove'</span></td>
            <td><input name="txt_spam" type="text" value="<?php echo $_POST['txt_spam']; ?>" /></td>
        </tr>
        <tr>
            <td><strong>Message:</strong></td>
            <td><textarea name="txt_msg" rows="2"><?php echo $_POST['txt_msg']; ?></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td align="center"><input type="submit" name="submit" value="Submit" class="button" />
                <input type="reset" name="reset" value="Reset" class="button" /></td>
        </tr>
    </table>
</form>
<?php }
	$query = mysqli_query($dbconnect, "SELECT * FROM gb ORDER BY gb_id DESC");
	$totalrows = mysqli_num_rows($query); 

	$limit = 10;
	
	//-- defult page
	if(empty($page)){
		$page = 1;
	}
	
	//-- formula
	$limitvalue = $page * $limit - ($limit);
	$query  = "SELECT * FROM gb ORDER BY gb_id DESC LIMIT $limitvalue, $limit";
	$result = mysqli_query($dbconnect, $query);

	if(mysqli_num_rows($result) == 0){
		echo("Nothing to Display!");
	}
	
	echo "<table class=\"table-data\">";
	
	//--  displays gb data
	while($gb = mysqli_fetch_array($result)) {
	$email = $gb['gb_email'];
	$default = "";
	$size = 32;
	$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email).
		"&amp;default=".urlencode($default).
		"&amp;size=".$size;
		
		echo "<div class=\"row\">";
		echo "<div class=\"gravatar\"><img src=\"".$grav_url."\" alt=\"\" width=\"32\" height=\"32\" /></div>";
		
		$readable_date = date("F jS Y", strtotime($gb['gb_date']));
		$readable_time = date("h:ia", strtotime($gb['gb_date']));
		if(!empty($gb['gb_url'])) {
			echo "<strong><a href=\"". $gb['gb_url'] . "\" title=\"". $readable_date . " @ " . $readable_time . "\" target=\"_blank\">" . stripslashes(html_entity_decode($gb['gb_name'])) . "</a></strong>";
		} else {
			echo "<strong><span title=\"". $readable_date . " @ " . $readable_time . "\">" . $gb['gb_name'] . "</span></strong>";
		}
		
		$true_msg = nl2br($gb['gb_msg']);
		$true_msg = stripslashes(html_entity_decode($true_msg));
				
		echo " &raquo; " . $true_msg;
		echo "</div>";
	}
	mysqli_free_result($result);
	
	echo "</table>";
	?>
	<div class="credit"><a href="http://www.beyondeternal.com/gallery/" target="_blank">Euri's Gallery</a> &dagger; Tagboard &copy; <a href="http://www.beyondeternal.com/" target="_blank">Euri</a></div>
</div>
</body>
</html>
