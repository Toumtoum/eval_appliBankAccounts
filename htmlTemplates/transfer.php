<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <h3>Bank</h3>
            </div>
            <div class="nav-content">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="tabs tabs-transparent hide-on-med-and-down">
                    <li class="tab" class="active"><a href="">ADD ACCOUNT</a></li>
                    <li class="tab"><a href="">TRANSFER</a></li>
                    <li class="tab"><a href="">WITHDRAWAL</a></li>
                    <li class="tab"><a href="">DELETE ACCOUNT</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="tab" class="active"><a href="">ADD ACCOUNT</a></li>
                    <li class="tab"><a href="">TRANSFER</a></li>
                    <li class="tab"><a href="">WITHDRAWAL</a></li>
                    <li class="tab"><a href="">DELETE ACCOUNT</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="row form">
            <h5>TRANSFER</h5>
            <form class="col s12">
                <div class="input-field col s12">
                    <select>
                          <option value="" disabled selected>Choose account</option>
                          <option value=""></option>
                    </select>
                    <label>FROM</label>
                </div>
                <div class="input-field col s12">
                    <select>
                          <option value="" disabled selected>Choose account</option>
                          <option value=""></option>
                    </select>
                    <label>TO</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="" id="accountNb" type="text" class="validate">
                    <label for="accountNb">AMOUNT</label>
                </div>
                <a type="sumit" name="create" class="waves-effect waves-light btn">TRANSFER</a>
            </form>
        </div>
    </main>


    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../js/vendor/jquery-3.2.1.min.js"><\/script>')
    </script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/materialize.min.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
