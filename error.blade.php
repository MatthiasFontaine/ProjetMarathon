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
        <img src="{{ asset('img/bg.png') }}" id="background_image">
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


        <div id="error_image">

            <img src="{{ asset('img/error.png') }}" id="error_image">

        </div>

</body>
</html>