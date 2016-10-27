<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!--<nav class="navbar navbar-default navbar-fixed-top">-->
<!--    <div class="container">-->
<!--        <h2>Loginpage</h2>-->
<!--        <ul class="nav navbar-nav">-->
<!--            <li><a href="http://www.ndevr.co.uk">Ndevr</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Project name</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Welcomespage</h2>
        <div class="form">
            <form class="login-form" action="/Bootstrap/home.php">
                <h2>Login</h2>
                <hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <a tabindex="0" class="glyphicon glyphicon-envelope" role="button" data-toggle="popover" data-trigger="focus" title="Hint" data-content="Email addres here"></a>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <a tabindex="0" class="glyphicon glyphicon-lock" role="button" data-toggle="popover" data-trigger="focus" title="Hint" data-content="password goes here"></a>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                 </div>
                <a class="toggle" href="#">Reset password</a>
                <button type="submit" class="btn btn-default">Login</button>
            </form>

            <form class="forgot-form">
                <h2>Reset password</h2>
                <hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <a tabindex="0" class="glyphicon glyphicon-envelope" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="Email addres here"></a>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <a class="toggle" href="#">Sign In</a>
                <button type="submit" class="btn btn-default">Request</button>
            </form>
        </div>
    </div>

    <footer class="panel-footer navbar-fixed-bottom">
        <div class="container">
            <p class="text-muted">Place sticky footer content here.</p>
        </div>
    </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>