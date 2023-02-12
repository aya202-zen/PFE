<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Minimal login and signup forms Responsive Widget Template : W3layouts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../template/css_login/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="forms">
        <div class="container">
            <div class="forms-grid">
                <div class="login">
                    <img src="../images/logo.png" alt="error" style="width:30%;"/>
                    <strong>Bienvenu!</strong>
                    <span>Connectez-vous à votre compte</span>
                    <form action="Controller_login.php" method="post" class="login-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Nom d'utilisateur</label>
                                    <input name="username" type="text" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Mot de passe</label>
                                    <input name="pass" type="password" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-user-friends"></span>  
                                    <label class="form-label" for="input">Type de compte</label>
                                    <select name="type" id="" class="form-text">
                                        <option value="Admin">Admin</option>
                                        <option value="Directeur">Directeur </option>
                                    </select>
                                </div>
                                <div class="form-row bottom">
                                    <a href="#url" class="forgot">Mot de passe oublié?</a>
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login">Login <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
    </section>
</body>

</html>