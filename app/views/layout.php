<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Portal</title>
    <link rel="stylesheet" href="/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Engine MVC</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active stylelink"><a href="/">Home</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/contacts">Contacts</a></li>
                <li><a href="/aboutus">About Us</a></li>
                <li><a href="/products">Products</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mycontainer">
        <?php include_once APP . 'views/' . $view . '.php'; ?>    
    </div>


    <!--footer start from here-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft footer">
                    <div class="logofooter"> Engine MVC</div>
                    <p>Сайт находится в разработке</p>
                    <p><i class="fa fa-map-pin"></i> Dnipro, Ukraine</p>
                    <p><i class="fa fa-phone"></i> Phone : +3 8093 888 88 88</p>
                    <p><i class="fa fa-envelope"></i> E-mail : info@engine.com</p>

                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom footer">
                    <h6 class="heading7">РАЗДЕЛЫ</h6>
                    <ul class="footer-ul">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/contacts">Contacts</a></li>
                        <li><a href="/aboutus">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p>© 2016</p>
                </div>
                <div class="col-md-6">
                    <ul class="bottom_ul">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/contacts">Contacts</a></li>
                        <li><a href="/aboutus">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->



    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <script src="/css/js/bootstrap.min.js"></script>
    <script src="/css/js/bootstrap.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>