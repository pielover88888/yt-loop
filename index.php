<!DOCTYPE html>
<html>
<style>
#list{
margin-left:2em;
overflow-y:scroll;
border:1px solid grey;
border-radius:5px;
width:400px;
float:left;
height:200px;
}
<?php
//echo file_get_contents('../teewo/normalize.css');
//echo file_get_contents('../teewo/skeleton.css');
// fixed flhead.php from getting css files derpilly
?>

</style>
<title>Yt-loop - Riot productions</title>

<?php
include "../flhead.php";
if(isset($_GET["url"]) ){
$url = $_GET["url"];
$url = explode("&list",$url)[0];
//shell_exec("rm file.mp4" . " > tel.txt");

$command = "youtube-dl -g -f 18 " . escapeshellcmd($url);
$theURL = shell_exec($command . "");
//sleep(4);
}
//https://www.youtube.com/watch?v=uw_6_7CRwAs
$rand = rand(1,1000) + "=" + rand(1,1000);
?>
<div id="info" style="left:0px;position:absolute;margin-left:1em; width:400px;">
</div>

<?php if(isset($_GET["url"])) : ?>
<video src="<?= $theURL ?>" controls loop width=480 style="float:right;margin-right:1em;" autoplay autoload>

<?php else : ?>


<?php endif; ?>
<?php
if(isset($_GET["url"])){

$message = $_GET["url"] . "<br>\n";
$message .= file_get_contents('list.html');
file_put_contents('list.html', $message);
// file_put_contents("list.txt",$message,FILE_APPEND);
}
?>

<span id="real" style="display:none;">
<?php include "desc.php"; ?>
<div id="list">
<?= file_get_contents("list.html"); ?>
</div>
</span>
<script>
var info = document.getElementById("info").innerHTML = document.getElementById("real").innerHTML;
//info.innerHTML = "hi";
var thing = "<?php echo htmlspecialchars($url); ?>"
var inf = document.getElementById("input").innerHTML = thing;
</script>
<a style="position: absolute;left: 0;bottom: 0;" href="https://youtu.be/TbiedguhyvM">Do Not Click Me</a>
</html>
