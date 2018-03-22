<!doctype html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Abdel - Stratis</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


    <div class="co">
    <a href="http://localhost/BasicWebsite/public/" class="btn btn-primary">Home</a>
    </div>

    <form class="form-signin" action="/BasicWebsite/public/messages" method="get">
        <center>
        <h1 class="h3 mb-3 font-weight-normal"> <p class="ok">Abdel - Stratis </p><br><br> Connexion</h1>
        </center>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="mdp" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <center>
        <p class="mt-5 mb-3 text-muted">Abdel - Stratis &copy; 2018</p>
        </center>
    </form>

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .checkbox {
        font-weight: 400;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .co{
        position: absolute;
        top : 25px;
        left : 25px;
    }
    .ok{
        font-family: "Century Gothic";
        font-weight: bolder;
        color: #062c33;
    }





</style>

</body>
</html>