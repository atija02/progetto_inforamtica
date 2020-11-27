<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Template</title>

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


    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <i class="fab fa-twitter" style="font-size: 30px;"></i>

            <b class="IconText">Twitter</b>
        </div>
        <ul class="list-unstyled components">
            <p style="font-size: 25px;">Welcome!</p>
            <li class="active">
                <a href="index.php">Home&nbsp;&nbsp;<i class="fas fa-home" style="font-size:15px"></i></a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Donazioni</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Supporto&nbsp;&nbsp;<i class="fas fa-question-circle" style="font-size:15px"></i></a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a>(+1) 267 936 7739&nbsp;&nbsp;<i class="fas fa-phone" style="font-size:13px"></i></a>
                    </li>
                    <li>
                        <a>(+39) 248 532 7289&nbsp;&nbsp;<i class="fas fa-phone" style="font-size:13px"></i></a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="loginContainer">
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="login.php" class="download">Login</a>
                </li>
                <li>
                    <a href="login.php" class="download">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fine Sidebar  -->



    <div id="content">
        <!-- NavBar  -->
        <nav class="navbar navbar-expand-lg navbar-light " style="padding-bottom:23.5px;padding-top:23.5px;width:100%; position: fixed; overflow:hidden; z-index: 9999; margin-bottom:100px; background-color: whitesmoke;">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-align-justify"></i>
                    <span>Toggle Sidebar</span>
                </button>

                <div style="padding-right: 14.3%;">
                    <form class="form-inline">
                        <button type="button" class="btn btn-info" onclick="window.location.href='profile.php'">Profilo</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Fine NavBar  -->


        <!-- Right Menu  -->
        <div id="rightMenu">
            <h3 class="rmTitle" style="color:whitesmoke;">Potrebbe piacerti</h3>
            <div class="rmContent">
                <img src="images/kanye_west.jpg" class="imgContainer">
                <i class="pHeader1" style="color:#262525">@kanye_west</i>
            </div>
            <div class="rmContent">
                <img src="images/kanye_west.jpg" class="imgContainer">
                <i class="pHeader1" style="color:#262525">@kanye_west</i>
            </div>
            <div class="rmContent">
                <img src="images/kanye_west.jpg" class="imgContainer">
                <i class="pHeader1" style="color:#262525">@kanye_west</i>
            </div>
            <div class="rmContent">
                <img src="images/kanye_west.jpg" class="imgContainer">
                <i class="pHeader1" style="color:#262525">@kanye_west</i>
            </div>
            <div class="rmFooter">
                <p class="rmFooterTitle">Prima volta su Twitter?</p>
                <p class="rmFooterP"> Iscriviti subito per sbloccare tutte le funzioni del sito.</p>
                <div class="rmButtonContent">
                    <button class="rmButton" onclick="location.href='register.php'">Iscriviti</button>
                </div>
            </div>
        </div>
        <!-- Fine Right Menu  -->

    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>