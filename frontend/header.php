<?php require_once 'config.php' ?>

<header id="header">
    <div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> CliMaker </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li><a href="allRooms.php"> My rooms </a></li>
                        <li><a href="templates.php"> My templates </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Account <span class="caret"> </span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="user.php"> Edit </a></li>
                                <li><a href="../actions/logout.php"> Sign out </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>