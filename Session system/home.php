<?php
// starting the session
session_start();


if (isset($_POST['naam'])) {
    $_SESSION['naam'] = $_POST['naam'];
}
?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<strong>Naam:</strong>
<form action="" method="post">
<input type="text" name="naam"/>
<input type="submit" name="Submit" value="Submit!" />
</form>

<div class="container">
    <a href="product.php">Continue</a>
</div>
</body>
</html>