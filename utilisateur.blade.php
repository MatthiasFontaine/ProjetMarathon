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

<div class="navbar">
  <div class="navbar-inner">
  </div>
</div>
<div class="container profile">


    <div class="presentation_utilisateur">
        <div id="img_flex_utilisateur">
            <img src="/img/bj.jpg">
        </div>
        <div id="info_flex_utilisateur">
            <h1>Utilisateur</h1>
                <p><i>"  Inserer ici le laravel SANS enlever les guillemets  "</i></p>
        </div>
    </div>

    <img src="/img/arrow.png" class="utilisateur_arrow">

      <div class="visionage">
          <span id="heures_num">504<span id="heures">heures</span></span>
            <p>de visionage total</p>
          <span id="heures_num">87<span id="heures">épisodes</span></span>
            <p>visionnés au total</p>
      </div>


      <div class="progression">
            
                <div class=""><h2>Serie 1</h2><progress max="100" value="80"></progress></div>
                <div class=""><h2>Serie 2</h2><progress max="100" value="40"></progress></div>
                <div class=""><h2>Serie 3</h2><progress max="100" value="60"></progress></div>
                <div class=""><h2>Serie 4</h2><progress max="100" value="90"></progress></div>
                <div class=""><h2>Serie 5</h2><progress max="100" value="50"></progress></div>
                <div class=""><h2>Serie 6</h2><progress max="100" value="40"></progress></div>
      </div>
      </div>    
      




        <h1 id="title_user_critic">Critiques de *utilisateur*</h1>

            <div class="critique_utilisateur_div">
                <div class="nom_serie_critique_utilisateur">
                    <h>*Nom de la série*</h>
                </div>
                        <div>
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

                <div class="nom_serie_critique_utilisateur">
                    <h>*Nom de la série*</h>
                 </div>
                        <div>
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
            </div>
 
      
</body>
</html>