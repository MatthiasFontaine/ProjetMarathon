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

        </header>

        <div class="bodylogin">
      <div id="form_wrapper">
            <div id="form_left">
                <img src="{{ asset('img/logo.png') }}">
            </div>
            <div id="form_right">
                <h1>Connexion</h1>
                <div class="input_container">
                    <input placeholder="Email" type="email" name="Email" id="field_email" class='input_field'>
                </div>
                <div class="input_container">
                    <input  placeholder="Mot de passe" type="password" name="Password" id="field_password" class='input_field'>
                </div>
                <input type="submit" value="Login" id='input_submit' class='input_field2'>
                <span>Perdu ?<a href="#"> Nom / mot de passe </a></span>
            </div>
        </div>
    </div>
    
    <h1 id="inscription"><a href="">Ou inscrivez-vous !</a></h1>

</div>