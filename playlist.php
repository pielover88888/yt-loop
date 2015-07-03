<!DOCTYPE html>
<html>
<style>
#list{
margin-left:10em;
overflow-y:scroll;
border:1px solid grey;
border-radius:5px;
width:400px;
float:left;
height:200px;
}

<?php
echo file_get_contents('../teewo/normalize.css');
echo file_get_contents('../teewo/skeleton.css');
?>

</style>
<title>Yt-loop playlist - Riot productions</title>

<?php
include "../flhead.php";
if(isset($_GET["url"]) ){
$url = $_GET["url"];
$url = explode("&list",$url)[0];
shell_exec("rm file.mp4" . " > tel.txt");
$command = "youtube-dl -g -f 18 " . escapeshellcmd($url) . "";
$theURL = shell_exec($command . "");
//foreach(explode("\n",$output) as $url){echo "<video src=\"$url\"><br>"}
$i = 0;
foreach(explode("\n",$theURL) as $urn){
echo $i++;
echo "<video src='$urn' preload='none' controls loop width=720 style='float:right;margin-right:1em;'></video>";
//echo $urn ."<br><br><br>";
}
//sleep(4);
}
//https://www.youtube.com/watch?v=uw_6_7CRwAs
$rand = rand(1,1000) + "=" + rand(1,1000);
?>
<div id="info" style="position:absolute;left:1em; width:400px;">
</div>

<?php if(isset($_GET["url"])) : ?>
<video src="<?= $theURL ?>" controls loop width=720 style="float:right;margin-right:1em;" autoplay autoload>
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

</html>
