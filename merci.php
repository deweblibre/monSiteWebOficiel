<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>remerciment</title>

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body style="background-color: rgba(255, 217, 0, 0.308);">



    <div class="container">
        <div>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation"
                style="background-color: turquoise; border: 1px solid gray; border-radius: 1px; font-family: maPolice8;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" id="test">
                        <img src="images/gmail.png" alt="" id="gmail"> <!-- à remplacer par icone gmail -->
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse" style="color: black;">
                    <ul class="nav navbar-nav">
                        <li class="active" id="bt1"><a href="index.html" style="color: black;">

                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>

                                Accueil</a>
                        </li>

                        <li id="bt1"><a href="nosCreations.html" style="color: black;">

                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>

                                Voir nos créations</a></li>
                        <li id="bt2"><a href="pkNous.html" style="color: black;">

                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>

                                Pourquoi Nous ?</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="bt3"><a href="apropos.html" style="color: black;">

                                <span class="
                        glyphicon glyphicon-info-sign" aria-hidden="true"></span>

                                A propos</a></li>
                        <li class="dropdown" id="bt4">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">
                                <span class="glyphicon glyphicon-triangle-top" aria-hidden="true" id="fleche"></span>
                                Voir Plus </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page Facebook</a></li>
                                <li><a href="#">Compte Instagram</a></li>
                                <li><a href="#">Compte Skype</a></li>
                                <li><a href="#">Adresse Gmail</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>



            <div class="container" style="margin-top: 100Px;">

                <div id="rs">
                    <div>
                        <a href="www.facebook.com">
                            <div class="rs">
                                <!-- facebook -->
                                <img class="rs" src="images/facebook-app-logo.png" alt="">
                            </div>
                        </a>
                        <a href="www.instagram.com">
                            <div class="rs">
                                <!-- Instagram -->
                                <img class="rs" src="images/instagram (1).png" alt="">
                            </div>
                        </a>
                        <a href="www.skype.com">
                            <div class="rs">
                                <!-- Skype -->
                                <img class="rs" src="images/skype3.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>


                <div>
                    <h1 style="text-align: center;">
                        Merci de nous avoir fait confiance 😃
                        <br>
                        vous allez recevoir un mail de remerciments vers l'adresse mail rentrée!
                    </h1>
                </div>



            <div class="container" style="margin-top: 200px;">
                <div>


                    <a href="mailto: devweblibre@gmail.com" style="text-decoration: none; font-family: maPolice8"
                        id="ctn">


                        <button type="button" style="height: 70px;" id="lol"
                            class="btn btn-large btn-block btn-default"> <span class="glyphicon glyphicon-envelope"
                                aria-hidden="true"></span>
                            Contactez Nous </button>

                    </a>
                </div>
            </div>


            <?php
            if(isset($_POST['submit'])){
            $to=$_POST['email'];
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"devweblibre.com"<devweblibre@gmail.com>'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';           
            $message='
            <!DOCTYPE html>
            <html xmlns:v="urn:schemas-microsoft-com:vml" lang="fr">
            <head>
                <meta http-equiv="content-type" content="text/html; charset=utf-8">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>email</title>
            </head>
            <body>
                <div style="background-color: rgba(24, 75, 75, 0.692); justify-content: center; height: 200px;">
                    <h1 style="text-align: center; color:white;">
                        Bonjour et merci d`avoir choisis notre boite ! 
                        La prochaine etape consiste à nous contacter via l`adresse : devweblibre@gmail.com 
                        A toute à l`heure 😃
                    </h1>
                </div>
            </body>
            </html>
            ';
            
            mail($to, "Email de remerciments !", $message, $header);
            }
            ?>





            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Bootstrap JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>