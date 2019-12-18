<!DOCTYPE html>
<htmllang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet"> 

    <title>Watch it!</title>

    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/screen.css" rel="stylesheet">

</head>

<body>

    <div class="background">
    <img src="/img/bg.png" id="background_image">
        <div id="filtre"></div>
        <div id="text">

        <header class="header">
        
                    <p>Watch it!</p>
        
                        <nav>
                            <div class="recherche">
        
                    
        
                                <h1><a href="/resources/views/episode.blade.php">Explorer</a></h1>
                                <h1><a href="episode.php">Critiques</a></h1>
                                <h1><a href="episode.blade.php">Mes critiques</a></h1>
                                <h1><a href="">Mon compte</a><h1>
        
                                <form method="post">
                                        <input type="text" name="search">
                                        <input type="submit" alt="OK" value="OK">
                                </form>
        
                            </div>
                        </nav>
        
                </header>

<div class="presentation">

    <div class="test">
         <img src="">
    </div>

    <div class="presentation_contenu">
        <h1>Titre serie</h1>
            <h2>Nom du réalisateur</h2>
                <h3>Date</h3>

                <p>Description de la série lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie 
                </p>
    </div>

</div>


    <img src="/img/arrow.png" class="presentation_arrow">



    <div class="critique">


        <div class="critique_redac">
            <h1>Critique de la réadaction</h1>

            <div class="critique_redac_contenu">
                    <h2>Titre de la critique</h2>
                        <p>Contenu de la critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique 
                        </p>
                    <div class="critique_info_utilisateur">
                        <h3>Nom utilisateur</h3>
                            <h4>Note utilisateur</h4>
                    </div>
                </div>

        </div>

        <div class="critique_utilisateur">
            <h1>Critiques des utilisateurs</h1>

                <div class="critique_contenu">
                    <h2>Titre de la critique</h2>
                        <p>Contenu de la critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique 
                        </p>
                    <div class="critique_info_utilisateur">
                        <h3>Nom utilisateur</h3>
                            <h4>Note utilisateur</h4>
                    </div>
                </div>

                <div class="critique_contenu">
                    <h2>Titre de la critique</h2>
                        <p>Contenu de la critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique 
                        </p>
                    <div class="critique_info_utilisateur">
                        <h3>Nom utilisateur</h3>
                            <h4>Note utilisateur</h4>
                    </div>
                </div>

                <div class="critique_contenu">
                    <h2>Titre de la critique</h2>
                        <p>Contenu de la critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique lorem ipsum critique 
                        </p>
                    <div class="critique_info_utilisateur">
                        <h3>Nom utilisateur</h3>
                            <h4>Note utilisateur</h4>
                    </div>
                </div>
                
        </div>


    </div>



    <div class="liste_episodes">

        <ul id="menu_deroulant">
        <li><a href="#">Lien menu 1</a>
            <ul>
                <li><a href="#">Saison 1</a></li>
                <li><a href="#">Saison 2</a></li>
                <li><a href="#">Saison 3</a></li>
            </ul>
        </li>
    </ul>

    </div>


</body>

</html>
