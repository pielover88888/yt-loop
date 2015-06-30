<form action="" method="GET">
<input name="url" type="text" placeholder="YouTube URL" value="<?php echo $url; ?>">
<input type="submit" value="Embed">
</form>
<B>hello.</b> Enter a youtube address to have it embedded via direct mp4 link.
<s><strike>currently,
playlist urls dont work or play at all, so remove the &list=..blah,
k?
As of 12:17, june 28th, 2015 i am working on autoremoving it
server side.</strike></s> Fixed, 12:21
<br>
<b>What?:</b> if the URL is like http://youtube.com/playlist?list=, then go
<a href="playlist.php">here</a> otherwise <a href="/loop/">this</a> will work for
http://youtube.com/watch?v= URLs.
