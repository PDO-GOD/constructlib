<?php
// starting the session
session_start();


if (isset($_POST['product'])) {
    $_SESSION['product'] = $_POST['product'];
}
if(!empty($_GET["bestel"]))
{
    $_SESSION["winkelwagen"][] = $_GET["bestel"];
}
?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<head></head>
<body>

<div class="container">
    <div>Welkom beste <?php echo $_SESSION['naam'];?></div>
</div>

<?php
$Autos = [
"Toyota",
"Fiat",
"Renault"
];

foreach($Autos as $auto)
{
    echo $auto." <a href=\"?bestel={$auto}\">bestel</a><br />";
}

?>

<!--img folder related to this code block-->
<!--<div class="container">-->
<!--    <div class="border border-dark">-->
<!--        <img src="img/auto1.png">-->
<!--        <button type="button" class="btn btn-success">Add to cart</button>-->
<!--    </div>-->
<!--    <div class="border border-dark">-->
<!--        <img src="img/auto2.png">-->
<!--        <button type="button" class="btn btn-success">Add to cart</button>-->
<!--    </div>-->
<!--    <div class="border border-dark">-->
<!--        <img src="img/auto3.png">-->
<!--        <button type="button" class="btn btn-success">Add to cart</button>-->
<!--    </div>-->
<!--</div>-->
</body>




<div class="container"><a href="checkoutwarning.php">Afrekenen</a></div>
</body>
</html>