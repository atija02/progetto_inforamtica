<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Post Comment</title>



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
<?php
session_start();
if (isset($_SESSION['email'])) {
    include_once 'log-template.php';
} else
    include_once 'template.php';
?>

<body>



    <div class="postContainer">

        <?php
        $idpost = $_GET['idpost'];
        $con = new mysqli('localhost', 'root', 'pass', 'twitter');
        $sql = "SELECT id_post, contenuto, username, immagine FROM post INNER JOIN utenti ON post.fk_utente = utenti.id WHERE id_post = '$idpost'";
        $result = $con->query(($sql));

        //se row > 0, carico i dati
        if ($result->num_rows > 0) {
            $postcom = "";
            while ($row = $result->fetch_assoc()) {

                $postcom .= "<div class='postContainer2'>" .
                    " <div class='card shadow-sm border-light mb-3' style='max-width: 35rem;'>" .
                    "<div class='card-body text-info pb-0'>" .
                    "<img src='" . $row["immagine"] . "'" . "class='imgContainer'>" .
                    "<i class='pHeader1'>" . "@" . $row["username"] . "</i>" . " <i class='fas fa-check'>" . "</i>" .
                    " <p class='pContent'>" . $row["contenuto"] . "</p>" .
                    "</div>" .
                    "</div>" .
                    "</div>";
            }
        } else {
            echo "nessun post presente all'interno del database";
        }

        ?>


        <?php
        echo $postcom;
        ?>



        <?php
        $idpost = $_GET['idpost'];
        $con = new mysqli('localhost', 'root', 'pass', 'twitter');
        $sql = "SELECT post.id_post, utenti.username, utenti.immagine, commenti.commento FROM post INNER JOIN commenti ON commenti.fk_postC = post.id_post INNER JOIN utenti ON utenti.id = commenti.fk_utenteC WHERE post.id_post = '$idpost' ORDER BY commenti.id DESC LIMIT 5";
        // $sql = "SELECT commenti.commento, utenti.username FROM commenti INNER JOIN post ON post.id_post = commenti.fk_postC INNER JOIN utenti ON utenti.id = post.fk_utente WHERE commenti.fk_utenteC = '$session_id'";

        $result = $con->query(($sql));

        //se row > 0, carico i dati
        if ($result->num_rows > 0) {
            $tab6 = "";
            while ($row = $result->fetch_assoc()) {

                $tab6 .=

                    "<div class='card-body text-info pb-0'>" .
                    "<img src='" . $row["immagine"] . "'" . "class='imgContainer'>" .
                    "<i class='pHeader1'>" . "@" . $row["username"] . "</i>" . " <i class='fas fa-check'>" . "</i>" .
                    " <p class='pContent'>" . $row["commento"] . "</p>" .



                    "</div>";
            }
        } else {
            $tab6 = "";
            $tab6 .=

                "<div class='card-body text-info pb-0'>" .

                " <p class='pContent'>" . "Nessun commento" . "</p>" .

                "</div>";
        }


        ?>

        <div class='card shadow-sm border-light mb-3' style='max-width: 35rem;'>
            <?php
            echo $tab6;
            ?>
            <div class="card-footer bg-transparent border-light">
                <?php
                $idpost = $_GET['idpost'];
                $stringa = "";
                //"<a class='pFooter1' href='post-comment.php?idpost=".$row['id_post']."'>Commenti</a>" . "<i class='fa fa-comment-o' aria-hidden='true' style='font-size:15px'></i>" .
                $stringa .= "<a href='commenta.php?idpost=" . $idpost . "' class='btn btn-info btn-sm ' role='button' aria-pressed='true'>Scrivi un commento!</a>";
                echo $stringa;
                ?>

            </div>
        </div>







    </div>






</body>

</html>