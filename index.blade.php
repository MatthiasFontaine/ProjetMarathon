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

        
        <p id="slogan">Watch it, and let's talk about it!</p>

        <img src="https://popupfilmresidency.org/wp-content/uploads/2019/05/white-down-arrow-png-2.png" id="arrow">

        

    <div class="sliders">

        <h1 id="slider_title">Nos dernières critiques</h1>

        <div class="first_slider"> 

                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">1ere critique</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">1ere critique</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">1ere critique</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">1ere critique</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">1ere critique</a></div></div>

        </div>

        <h3><a href"">Tout voir</a><h3>


        <h1 id="slider_title">Séries</h1>

        <div class="second_slider">

                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">Voir</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">Voir</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">Voir</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">Voir</a></div></div>
                <div><img src="/img/bj.jpg"><div class="slider_hover"><a href="">Voir</a></div></div>

        </div>

        <h3><a href"">Tout voir</a><h3>


        <h1 id="slider_title">Nos critiques vidéo</h1>

        <div class="third_slider"> 

                <div><a href=""><img src=""></div>
                <div><a href=""><img src=""></div>

        </div>
    </div>

        

    </div>
    </div>
</body>

</html>