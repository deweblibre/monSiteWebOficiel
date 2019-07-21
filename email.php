<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page d'acueil</title>

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
                        <li id="bt1"><a href="index.html" style="color: black;">

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


                
                <form action="merci.html" method="POST" role="form"  style="justify-content: center;">
                    <legend style="font-family: maPolice5">Cette etape permet de vous envoyer un email de remerciment et un lien qui vous conduit vers notre boite gmail 😃</legend>
                
                    <div class="form-group">
                        <label for="" style="font-family: maPolice8">Votre Adresse Email :</label>
                        <input type="mail" name="email" class="form-control" id="email" placeholder="adresse email">
                    </div>
                
                    
                
                    <input type="submit" name="submit" value="M'envoyer un email" class="btn btn-primary">             
                       </form>



                


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






            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Bootstrap JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>