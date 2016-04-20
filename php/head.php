<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagination Home Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
        <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/contact.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <div class="container main">
            <div class="header">
                <img src="../imgs/pag_logolg.png">
            </div>
            <nav class="nav navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Pagination</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li <?php if($_SERVER["SCRIPT_FILENAME"] == "home"){ echo "id='active'"; } ?>><a href="home.php" >Home</a></li>
                        <li <?php if($currentPage == "download"){ echo "id=\"active\""; } ?>><a href="download.php">Downloads</a></li>
                        <li <?php if($currentPage == "buy"){ echo "id=\"active\""; } ?>><a href="buy.php">Buy</a></li>
                        <li <?php if($currentPage == "contact"){ echo "id=\"active\""; } ?>><a href="contact.php">Contact</a></li>
                        <li <?php if($currentPage == "members"){ echo "id=\"active\""; } ?>><a href="#">Members</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                    </ul>
                </div>
            </nav>