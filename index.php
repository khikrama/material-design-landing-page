<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <title>Evil Rabbit</title>

    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="robots" content="INDEX, FOLLOW"/>
    <meta name="author" content="Evil Rabbit"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui"/>

    <link rel="icon" href="app/img/favicon.ico" type="image/icon"/>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>

    <meta name="X-UA-Compatible" content="IE=edge"/>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <!-- Less -->
    <link rel="stylesheet/less" type="text/css" href="app/css/global.less"/>

    <!-- JS - Libs -->
    <script src="app/js/jquery/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/less/less.1.7.5.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/px_loader/PxLoader.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/px_loader/PxLoaderImage.js" type="text/javascript" charset="utf-8"></script>

    <!-- Greensock -->
    <script src="app/js/greensock/TweenMax.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/greensock/TimelineMax.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/greensock/plugins/ScrollToPlugin.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Constants -->
    <script src="app/js/app/constants/colors.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/app/constants/tween.js" type="text/javascript" charset="utf-8"></script>

    <!-- Elements -->
    <script src="app/js/app/elements/nav.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/app/elements/buttons.js" type="text/javascript" charset="utf-8"></script>

    <!-- Pages -->
    <script src="app/js/app/pages/home.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/app/pages/projects.js" type="text/javascript" charset="utf-8"></script>
    <script src="app/js/app/pages/contact.js" type="text/javascript" charset="utf-8"></script>

    <!-- App -->
    <script src="app/js/app.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
    <div id="app">

        <!-- Nav -->
        <nav id="nav">
            <?php include "./app/includes/elements/nav.php"; ?>
        </nav>
        <!-- Nav -->

        <!-- Home -->
        <section id="home">
            <?php include "./app/includes/pages/home.php"; ?>
        </section>
        <div id="home-spacer"></div>
        <!-- Home -->

        <!-- Projects -->
        <section id="projects">
            <div class="holder">
                <?php include "./app/includes/pages/projects.php"; ?>
                <a class="btn top" href="#projects">
                    <svg viewBox="0 0 56 56" x="0px" y="0px" width="56px" height="56px" >
                        <path d="M 20 25 L 28 33 L 36 25 L 34 23 L 28 29 L 22 23 L 20 25 Z"/>
                    </svg>
                </a>
                <a class="btn-previous" href="#">
                    <svg viewBox="0 0 56 56" x="0px" y="0px" width="56px" height="56px" >
                        <path d="M 31 20 L 23 28 L 31 36 L 33 34 L 27 28 L 33 22 L 31 20 Z"/>
                    </svg>
                </a>
                <a class="btn-next" href="#projects">
                    <svg viewBox="0 0 56 56" x="0px" y="0px" width="56px" height="56px" >
                        <path d="M 25 20 L 33 28 L 25 36 L 23 34 L 29 28 L 23 22 L 25 20 Z"/>
                    </svg>
                </a>
                <a class="btn bottom" href="#contact">
                    <svg viewBox="0 0 56 56" x="0px" y="0px" width="56px" height="56px" >
                        <path d="M 20 25 L 28 33 L 36 25 L 34 23 L 28 29 L 22 23 L 20 25 Z"/>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Projects -->

        <!-- Contact -->
        <section id="contact">
            <div class="holder">
                <?php include "./app/includes/pages/contact.php"; ?>
                <a class="btn bottom" href="#home">
                    <svg viewBox="0 0 56 56" x="0px" y="0px" width="56px" height="56px" >
                        <path d="M 20 31 L 28 23 L 36 31 L 34 33 L 28 27 L 22 33 L 20 31 Z"/>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Contact -->

        <!-- Footer -->
        <footer>
            <div class="holder">
                <?php include "./app/includes/elements/footer.php"; ?>
            </div>
        </footer>
        <!-- Footer -->

    </div>
</body>
</html>