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


                <div class="presentation_ep">
                
                    <div class="test_ep">
                         <img src="">
                    </div>
                
                    <div class="presentation_contenu_ep">
                        <h1>Titre episode</h1>
                            <h2>Nom de la série</h2>
                                <h3>Saison X episode X</h3>
                                    <h4>Durée : X minutes</h4>
                
                                <p>Description de la série lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie lorem ipsum serie 
                                </p>
                    </div>
            

                </div>

            <div class="switch_episode">
                <div id="ep_precedent">
                    <a href=""><img src="/img/arrowright.png"></a><span>Episode précédent</span>
                </div>
                <div id="ep_suivant">
                    <span>Episode suivant</span><a href=""><img src="/img/arrowleft.png"></a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>



