<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Collapsible sidebar using Bootstrap 4</title>



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
        <!-- POST N1-->
        <div class="card shadow-sm border-light mb-3" style="max-width: 35rem;">
            <div class="card-body text-info pb-0">
                <img src="images/bill_gates.jpg" class="imgContainer">
                <i class="pHeader1">@bill_gates</i> <i class="fas fa-check"></i>
                <p class="pContent">More than 7 million community health workers serve their neighbors around the world, improving access to primary healthcare for their communities. Now they’re doing heroic work to respond to the pandemic.</p>
            </div>
            <div class="card-footer bg-transparent border-light">
                <span class="pFooter1" onclick="location.href='post-comment.html'">Comment</span> <i class="fa fa-comment-o" onclick="window.location.href='signin.html'" aria-hidden="true" style="font-size:15px"></i>
                <i class="far fa-heart" style="font-size:16px;float:right"></i>
                <span class="pFooter2">Like&nbsp; </span><i class="far fa-comment-alt"></i>
            </div>
        </div>
        <!-- FINE POST N1-->

        <!-- POST N2 -->
        <div class="postContainer2">
            <div class="card shadow-sm border-light mb-3" style="max-width: 35rem;">
                <div class="card-body text-info pb-0">
                    <img src="images/kanye_west.jpg" class="imgContainer">
                    <i class="pHeader1">@kanye_west</i> <i class="fas fa-check"></i>
                    <p class="pContent">I will be the next <i class="pContent">USA</i> president.</p>
                </div>
                <div class="card-footer bg-transparent border-light">
                    <span class="pFooter1">Comment</span> <i class="fa fa-comment-o" onclick="window.location.href='signin.html'" aria-hidden="true" style="font-size:15px"></i>
                    <i class="far fa-heart" style="font-size:16px;float:right"></i>
                    <span class="pFooter2">Like&nbsp; </span><i class="far fa-comment-alt"></i>
                </div>
            </div>
        </div>
        <!-- FINE POST N2-->

        <!-- POST N3 -->
        <div class="postContainer2">
            <div class="card shadow-sm border-light mb-3" style="max-width: 35rem;">
                <div class="card-body text-info pb-0">
                    <img src="images/giuseppe_conte.jpg" class="imgContainer">
                    <i class="pHeader1">@giuseppeconte</i> <i class="fas fa-check"></i>
                    <p class="pContent">Indossa la mascherina, mantieni la distanza, lava spesso le mani. Seguiamo queste #TreSempliciRegole. Questa battaglia si vince con l’impegno di TUTTI.</p>
                </div>
                <div class="card-footer bg-transparent border-light">
                    <span class="pFooter1">Comment</span> <i class="fa fa-comment-o" onclick="window.location.href='signin.html'" aria-hidden="true" style="font-size:15px"></i>
                    <i class="far fa-heart" style="font-size:16px;float:right"></i>
                    <span class="pFooter2">Like&nbsp; </span><i class="far fa-comment-alt"></i>
                </div>
            </div>
        </div>
        <!-- FINE POST N3 -->

        <!-- POST N3 -->
        <div class="postContainer2">
            <div class="card shadow-sm border-light mb-3" style="max-width: 35rem;">
                <div class="card-body text-info pb-0">
                    <img src="images/giuseppe_conte.jpg" class="imgContainer">
                    <i class="pHeader1">@giuseppeconte</i> <i class="fas fa-check"></i>
                    <p class="pContent">Indossa la mascherina, mantieni la distanza, lava spesso le mani. Seguiamo queste #TreSempliciRegole. Questa battaglia si vince con l’impegno di TUTTI.</p>
                </div>
                <div class="card-footer bg-transparent border-light">
                    <span class="pFooter1">Comment</span> <i class="fa fa-comment-o" onclick="window.location.href='signin.html'" aria-hidden="true" style="font-size:15px"></i>
                    <i class="far fa-heart" style="font-size:16px;float:right"></i>
                    <span class="pFooter2">Like&nbsp; </span><i class="far fa-comment-alt"></i>
                </div>
            </div>
        </div>
        <!-- FINE POST N3 -->
        <!-- POST N3 -->
        <div class="postContainer2">
            <div class="card shadow-sm border-light mb-3" style="max-width: 35rem;">
                <div class="card-body text-info pb-0">
                    <img src="images/giuseppe_conte.jpg" class="imgContainer">
                    <i class="pHeader1">@giuseppeconte</i> <i class="fas fa-check"></i>
                    <p class="pContent">Indossa la mascherina, mantieni la distanza, lava spesso le mani. Seguiamo queste #TreSempliciRegole. Questa battaglia si vince con l’impegno di TUTTI.</p>
                </div>
                <div class="card-footer bg-transparent border-light">
                    <span class="pFooter1">Comment</span> <i class="fa fa-comment-o" onclick="window.location.href='signin.html'" aria-hidden="true" style="font-size:15px"></i>
                    <i class="far fa-heart" style="font-size:16px;float:right"></i>
                    <span class="pFooter2">Like&nbsp; </span><i class="far fa-comment-alt"></i>
                </div>
            </div>
        </div>
        <!-- FINE POST N3 -->
    </div>


</body>

</html>