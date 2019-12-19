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

        </header>


<div class="bodyaccount">

        <section class="signup">
            <div class="bodyaccount_container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Créer un compte</h2>
                       <div class="input_container2">
                    <input  placeholder="Vote nom" type="nom" name="nom" id="field_nom" class='input_field'>
                </div>
                        <div class="input_container2">
                    <input  placeholder="Email" type="email" name="email" id="field_email" class='input_field'>
                </div>
                        <div class="input_container2">
                    <input  placeholder="Mot de passe" type="password" name="Password" id="field_password" class='input_field'>
                </div>
                        <div class="input_container2">
                    <input  placeholder="Repeter le mot de passe" type="verifypassword" name="verifyPassword" id="field_verifypassword" class='input_field'>
                </div>
                    
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                       Vous avez déja un compte ? 
                        <a href="#" class="loginhere-link">Connecter vous ici</a>
                    </p>
                </div>
            </div>
        </section>