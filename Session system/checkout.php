<?php
session_start();

echo "Geselecteerde producten:<br />";

foreach($_SESSION["winkelwagen"] as $products)
{
    echo $products."<br />";
}

if (isset($_GET['empty'])) {
    session_destroy();
}

?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <input type="submit" name="empty" value="Empty Cart" />
</div>
</html>

