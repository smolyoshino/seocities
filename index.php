<h1>welcome to seocities!</h1>
<div id="postBox">
<form action="post.php" method="post">
<table>
<tr>
<td>Name:</td><td> <input type="text" name="name" value="Anonymous"><input type="submit" value="Post"></td>
</tr>
<tr>
<td>Code:</td><td><textarea name="post"></textarea></td>
</tr>
</table>
</form>
</div>

<h1>List of Websites</h1>
<!--database fetch here, WIP-->
<?php
include "config.php";
echo file_get_contents("sites.html");