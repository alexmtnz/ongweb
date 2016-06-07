
    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template">
        <title><?=$title ?>- My Webpage</title>
        <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
        <meta name="author" content="itembridge.com">
        <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>

        <?php  foreach($css as $cssfile){   ?>
            <link rel="stylesheet" type="text/css" href="<?=$cssfile?>">
        <?php } ?>

        <?php  foreach($js as $jssfile){   ?>
            <script src="<?=$jssfile ?>"> </script>
        <?php } ?>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <link rel='stylesheet' href="css/ie/ie8.css">
        <![endif]-->


    </head>

    <!-- EMPIEZA CONTENIDO  BODY/ HEADER -->
    <body class="fixed-header fixed-top">
    <div class="page-box">
        <div class="page-box-content">

    <div id="top-box">
    <div class="top-box-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-9 col-sm-5">

                </div>

                <div class="col-xs-3 col-sm-7">
                    <div class="navbar navbar-inverse top-navbar top-navbar-right" role="navigation">
                        <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".top-navbar .navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <nav class="collapse collapsing navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?=$url['account'] ?>">Mi cuenta</a></li>
                                <?php if($user!=null and $session['logged_in']==true) { ?>
                                    <li><a >
                                           Bienvenido <?=$user->nombre ?>
                                    </a>
                                    </li>
                                    <li><a href="<?=$url['logout']?>">
                                            desconectar
                                    </a>
                                    </li>
                                    <?php }else { ?>
                                <li><a href="<?=$url['login']?>">
                                        Log in
                                        <i class="fa fa-lock after"></i></a>
                                          </li>
                                    <?php } ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #top-box -->

<header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logo.svg" class="logo-img" alt="">
                        </a>
                    </div>
                </div><!-- .logo-box -->

                <div class="col-xs-6 col-md-10 col-lg-9 right-box">
                    <div class="right-box-wrapper">


                        <div class="primary">
                            <div class="navbar navbar-default" role="navigation">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                    <span class="text">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <nav class="collapse collapsing navbar-collapse">
                                    <ul class="nav navbar-nav navbar-center">
                                        <li >
                                            <a href="<?=$url['home'] ?>">Home<span class="item-new">New</span></a>

                                        </li>
                                        <li class="parent">
                                            <a href="<?=$url['propuestas'] ?>">Propuestas</a>

                                        </li>

                                        <li class="parent megamenu promo">
                                            <a href="#">Otro...<span class="item-new">New</span></a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="box closed">
                                                            <h6 class="title">Savant Apple Integration</h6>
                                                            <ul>
                                                                <li><a href="#">iPad, iPod touch, iPhone &amp; Mac Control</a></li>
                                                                <li><a href="#">iPod touch Remote Control</a></li>
                                                                <li><a href="#">Savant Host (Mac Mini)<span class="item-new bg-warning">Wow</span></a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Audio/Video Control</h6>
                                                            <ul>
                                                                <li><a href="#">Distributed Audio &amp; Video</a></li>
                                                                <li><a href="#">Matrix Switchers</a></li>
                                                                <li><a href="#">Audio/Video Processing</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Display Solutions</h6>
                                                            <ul>
                                                                <li><a href="#">Video Tiling<span class="item-new">New</span></a></li>
                                                                <li><a href="#">On-Screen Display</a></li>
                                                                <li><a href="#">Digital Messaging</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Sound</h6>
                                                            <ul>
                                                                <li><a href="#">Distributed Audio Controller</a></li>
                                                                <li><a href="#">Multi-channel Amplifiers<span class="item-new">New</span></a></li>
                                                                <li><a href="#">Architectural Speakers</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Display Solutions</h6>
                                                            <ul>
                                                                <li><a href="#">Video Tiling<span class="item-new bg-success">Coming Soon</span></a></li>
                                                                <li><a href="#">On-Screen Display</a></li>
                                                                <li><a href="#">Digital Messaging</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Sound</h6>
                                                            <ul>
                                                                <li><a href="#">Distributed Audio Controller</a></li>
                                                                <li><a href="#">Multi-channel Amplifiers</a></li>
                                                                <li><a href="#">Architectural Speakers<span class="item-new">New</span></a></li>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->

                                                    <div class="promo-block text-right">
                                                        <a href="#">
                                                            <img class="replace-2x" src="content/img/megamenu-big.jpg" width="253" height="457" alt="">
                                                        </a>
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul><!-- .sub -->
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div><!-- .primary -->
                    </div>
                </div>

                <div class="phone-active col-sm-9 col-md-9">
                    <a href="#" class="close"><span>close</span>×</a>
                    <span class="title">Call Us</span> <strong>+1 (777) 123 45 67</strong>
                </div>
                <div class="search-active col-sm-9 col-md-9">
                    <a href="#" class="close"><span>close</span>×</a>
                    <form name="search-form" class="search-form">
                        <input class="search-string form-control" type="search" placeholder="Search here" name="search-string">
                        <button class="search-submit">
                            <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				<path fill="#231F20" d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
				s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
				s4,1.794,4,4S8.206,10,6,10z"></path>
                                <image src="img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
			  </svg>
                        </button>
                    </form>
                </div>
            </div><!--.row -->
        </div>
    </div><!-- .header-wrapper -->
</header><!-- .header -->

<div class="breadcrumb-box">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Headers</a></li>
            <li class="active">Fixed Shop Header with User Menu</li>
        </ul>
    </div>
</div><!-- .breadcrumb-box -->
            <!-- FIN CONTENIDO  BODY/ HEADER -->


            <!--  EMPIEZA  BODY/ CONTENIDO -->

            <section id="main">
                <header class="page-header">
                    <div class="container">
                        <h1 class="title">Fixed Shop Header with User Menu</h1>
                    </div>
                </header>
                <div class="container">

                    <!-- AHORA IRIA SIDEBAR LEFT SI ESTA PUESTA.... -->

