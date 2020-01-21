<?php
session_start();
$_SESSION['name'] = $_POST['name'];
?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<head></head>
<body>

<div class="container">
    <div>Beste <?php echo $_SESSION['naam'];?> weet u zeker dat u wilt afrekenen?</div>
    <div class="container">
        <a href="product.php">Verder Winkelen</a>
        <a href="checkout.php">Afrekenen</a>
    </div>
</div>
</body>
</html>
