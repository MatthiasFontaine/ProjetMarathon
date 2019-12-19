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
        
            <p><a href="">Watch it!</a></p>
        
                        <nav>
                            <div class="recherche">
        
                    
        
                                <h1><a href="/resources/views/episode.blade.php">Explorer</a></h1>
                                <h1><a href="episode.php">Critiques</a></h1>
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

    <div class="ecrire">
        <h2 id="ecrire_titre">Ecrire une critique sur *inserer le nom de la série*</h2>
            <form>
                <div id="ecrire_flex">
                    <div id="ecrire_flex_head">
                        <input type="text" name="titre" placeholder="Titre">
                        <input type="text" name="note" placeholder="Note">
                    </div>
                    <div id="ecrire_flex_body">
                        <input type="text" name="critique" placeholder="Ecrivez votre critique...">
                    </div>
                    <div>
                        <input type="submit" alt="OK" value="OK">
                    </div>
        </form>
    </div>


    <div class="saison">
        <h1 id="liste_episode">Liste des episodes</h1>

            <div class="episode_slider"> 

                    <div><a href="">Saison 1</a></div>
                    <div><a href="">Saison 2</a></div>
                    <div><a href="">Saison 3</a></div>
                    <div><a href="">Saison 4</a></div>

            </div>



            <div class="liste_episodes"> 
            
                <div>
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                </div>
                <div>
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                </div>
                <div>
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                </div>
                <div>
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                </div>
                <div>
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                    <img src="/img/bj.jpg">
                </div>

            </div>

    </div>



</body>

</html>
