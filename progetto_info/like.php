<?php
session_start();
if (isset($_SESSION['email'])) {
    include_once 'log-template.php';
} else
    header('Location: ./login.php');
?>

<?php
$msg = "";

if (isset($_POST['submit'])) {


    $con = new mysqli('localhost', 'root', 'pass', 'twitter');
    if (isset($_POST['submit'])) {
        $fkutente = $_SESSION['id'];

        $fkpost = ($_GET['idpost']);

        $commento = $con->real_escape_string(($_POST['commento']));

        $con->query("INSERT INTO mipiace (fk_utente, fk_post) VALUES ('$fkutente','$fkpost')");
    }
}
?>



<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Like</title>



    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <!--     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
-->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/regular.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
-->




</head>

<body>



    <div class="postContainer">



        <?php if ($msg != "") echo $msg . "<br><br>"; ?>

        <div class='postContainer2'>
            <div class='card shadow-sm border-light mb-3' style='max-width: 35rem;'>
                <div class='card-body text-info pb-0'>
                    <form method="post" action="like.php?idpost=<?php echo $_GET['idpost'] ?>" ;>
                        <h2>Sei sicuro di voler mettere like?</h2><br>
                        <input class="btn btn-info" name="submit" type="submit" value="Conferma" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
                        <br>
                    </form>
                </div>
            </div>
        </div>

    </div>



</body>

</html>