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
        <!-- POST N1-->
        <div class="card shadow-sm border-light mb-3" style="max-width: 35rem;">
            <div class="card-body text-info pb-0">
                <img src="images/bill_gates.jpg" class="imgContainer">
                <i class="pHeader1">@bill_gates</i> <i class="fas fa-check"></i>
                <p class="pContent">More than 7 million community health workers serve their neighbors around the world, improving access to primary healthcare for their communities. Now they’re doing heroic work to respond to the pandemic.</p>
            </div>

            <div class="card-footer bg-transparent border-light">
                <div class="overflow-auto">
                    <p class="commentN">@user</p>
                    <p class="commentC">So funny!!</p>
                    <p class="commentN">@user</p>
                    <p class="commentC">So funny!!</p>
                    <p class="commentN">@user</p>
                    <p class="commentC">So funny!!</p>
                    <p class="commentN">@user</p>
                    <p class="commentC">So funny!!</p>
                    <p class="commentN">@user</p>
                    <p class="commentC">So funny!!</p>
                    <p class="commentN">@user</p>
                    <p class="commentC">So funny!!</p>

                </div>

            </div>
            <div class="card-footer bg-transparent border-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Write . . ." aria-label="Search">
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Comment</button>
                </form>
            </div>
        </div>
        <!-- FINE POST N1-->


    </div>







</body>

</html>