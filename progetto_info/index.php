<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Homepage</title>

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
    include_once 'template.php';
?>

<body>

    <div class="postContainer">



        <?php
        $con = new mysqli('localhost', 'root', 'pass', 'twitter');
        $sql = "SELECT contenuto, username, immagine FROM post INNER JOIN utenti ON post.fk_utente = utenti.id;";
        $result = $con->query(($sql));

        //se row > 0, carico i dati
        if ($result->num_rows > 0) {
            $tabella2 = "";
            while ($row = $result->fetch_assoc()) {

                $tabella2 .= "<div class='postContainer2'>" .
                    " <div class='card shadow-sm border-light mb-3' style='max-width: 35rem;'>" .
                    "<div class='card-body text-info pb-0'>" .
                    "<img src='" . $row["immagine"] . "'" . "class='imgContainer'>" .
                    "<i class='pHeader1'>" . "@" . $row["username"] . "</i>" . " <i class='fas fa-check'>" . "</i>" .
                    " <p class='pContent'>" . $row["contenuto"] . "</p>" .
                    "</div>" .
                    " <div class='card-footer bg-transparent border-light'>" .
                    "<a class='pFooter1' href='post-comment.php'>Commenti</a>" . "<i class='fa fa-comment-o' aria-hidden='true' style='font-size:15px'></i>" .

                    " <i class='far fa-heart' style='font-size:16px;float:right'></i>" .
                    " <span class='pFooter2'>Like&nbsp; </span><i class='far fa-comment-alt'></i>" .
                    "</div>" .
                    "</div>" .
                    "</div>";
            }
        } else {
            echo "nessun post presente all'interno del database";
        }


        ?>



        <?php echo $tabella2; ?>

    </div>


</body>

</html>