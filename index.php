<?php
$aan = $_GET["aan"]
$van = $_GET["van"]
$totaalbedrag = $_GET["totaalbedrag"]

if (isset (submit))
{
?>
<form method="post">
<input name="aan">
<input name="van">
<input name="totaalbedrag">
<input type="submit" name="submit">
</form>