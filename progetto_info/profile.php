<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Profile</title>



    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="mycss.css">
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
<?php
session_start();
if (isset($_SESSION['email'])) {
    include_once 'log-template.php';
} else
    header('Location: login.php');
?>

<body>
    <div class="wrapper">

        <div class="postContainer">



            <?php
            $con = new mysqli('localhost', 'root', 'pass', 'twitter');
            $session_id = $_SESSION['id'];
            $sql = "SELECT username, immagine  FROM utenti WHERE id = '$session_id'";
            $result = $con->query(($sql));

            //se row > 0, carico i dati
            if ($result->num_rows > 0) {
                $tabella4 = "";
                while ($row = $result->fetch_assoc()) {

                    $tabella4 .= "<div class='postContainer2'>" .
                        "<div class='card shadow-sm border-light mb-3' style='max-width: 35rem;'>" .
                        "<div class='card-body text-info pb-0'>" .
                        "<img src='" . $row["immagine"] . "'" . "class='imgContainer'>" .
                        "<i class='pHeader1'>" . "@" . $row["username"] . "</i>" . " <i class='fas fa-check'>" . "</i>" .
                        "<br>" .
                        "<br>" .
                        "</div>" .
                        "</div>" .
                        "</div>";
                }
            } else {
                echo "errore";
            }


            ?>
            <?php
            $con = new mysqli('localhost', 'root', 'pass', 'twitter');
            $session_id = $_SESSION['id'];

            $sql = "SELECT commenti.commento, utenti.username FROM commenti INNER JOIN post ON post.id_post = commenti.fk_postC INNER JOIN utenti ON utenti.id = post.fk_utente WHERE commenti.fk_utenteC = '$session_id'";
            $resultt = $con->query(($sql));

            //se row > 0, carico i dati
            if ($resultt->num_rows > 0) {
                $tabella5 = "";
                while ($row = $resultt->fetch_assoc()) {

                    $tabella5 .= "<div class='postContainer2'>" .
                        "<div class='card shadow-sm border-light mb-3' style='max-width: 35rem;'>" .
                        "<div class='card-body text-info pb-0'>" .
                        "<i class='pHeader1'>" . "You commented: " . "'" . $row["commento"] . "' at " . $row["username"] . "'s post." . "</i>" .
                        "<br>" .
                        "<br>" .
                        "</div>" .
                        "</div>" .
                        "</div>";
                }
            } else {
                $tabella5 = "";
                $tabella5 .= "<div class='postContainer2'>" .
                    "<div class='card shadow-sm border-light mb-3' style='max-width: 35rem;'>" .
                    "<div class='card-body text-info pb-0'>" .
                    "<i class='pHeader1'>" . "Non hai commentato ancora nessun post!" . "</i>" .
                    "<br>" .
                    "<br>" .
                    "</div>" .
                    "</div>" .
                    "</div>";
            }


            ?>


            <?php echo $tabella4; ?>
            <?php echo $tabella5; ?>


        </div>
    </div>

</body>

</html>