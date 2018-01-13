<nav class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="" id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?page=home"><i class="material-icons">fingerprint</i>GOMAB-CORP</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>">
                    <a href="?page=home">
                        <i class="material-icons">home</i> ACCUEIL
                    </a>
                </li>

                <li class="<?php echo ($page=="blog")?"active" : ""; ?>">
                    <a href="?page=blog">
                        <i class="material-icons">art_track</i> BLOG
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="material-icons">collections</i> PORTFOLIO
                    </a>
                </li>

                <!--
                <li>
                    <a href="#">
                        <i class="material-icons">school</i> CV
                    </a>
                </li>

                -->

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">style</i> CULTURE
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li>
                            <a href="sections.html#headers">
                                <i class="material-icons">dns</i> Formations
                            </a>
                        </li>
                        <li>
                            <a href="sections.html#features">
                                <i class="material-icons">build</i> Musiques
                            </a>
                        </li>
                        <li>
                            <a href="sections.html#blogs">
                                <i class="material-icons">list</i> Films
                            </a>
                        </li>
                        <li>
                            <a href="sections.html#teams">
                                <i class="material-icons">people</i> Jeux
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="index.php?page=contact">
                        <i class="material-icons">contacts</i> Contact
                    </a>
                </li>

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group form-white">
                        <input type="text" class="form-control" placeholder="Recherche">
                    </div>
                    <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini"><i class="material-icons">search</i></button>
                </form>



            </ul>
        </div>
    </div>
</nav>

<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/img/bg0.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="brand">
                    <h1>GOMAB
                        <div class="pro-badge">
                            Corp
                        </div>
                    </h1>

                    <h3 class="title">All Components</h3>
                </div>
            </div>
        </div>
    </div>
</div>