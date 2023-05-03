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
    <style>@import url('https://fonts.googleapis.com/css?family=Noto Sans Arabic&display=swap');
</style>
</head>
<body style="background-image:url('../images/download.png');">
    <section class="forms">
        <div class="container">
            <div  class="forms-grid">
                <div style="box-shadow: 0px 2px 6px rgba(0,0,0,0.3);"  class="login">
                    <img src="../images/MasterLogo.png" alt="error" style="width:50%;"/>
                    <strong style="visibility:hidden;font-family:Noto Sans Arabic;">مرحباً!</strong>
                    <span style="font-family:Noto Sans Arabic;">تسجيل الدخول إلى حسابك</span>
                    <form action="../controllers/C_login.php" method="post" class="login-form">
                        <fieldset>
                            <div  class="form">
                                <div class="form-row">
                                    <span style="margin-top:15px;" class="fas fa-user"></span>
                                    <label style="margin-left: 230px;font-family:Noto Sans Arabic;" class="form-label" for="input">إسم المستخدم</label>
                                    <input dir="rtl" style="padding-left:200px;" name="username" type="text" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span style="margin-top:17px;" class="fas fa-lock"></span>
                                    <label  style="margin-left: 265px;font-family:Noto Sans Arabic;" class="form-label" for="input">كلمة السر</label>
                                    <input dir="rtl" style="padding-left:200px;" name="pass" type="password" class="form-text">
                                </div>
                                <div dir="rtl" class="form-row button-login">
                                    <button style="height: 50px;;font-family:Noto Sans Arabic;" class="btn btn-login" > <span class="fas fa-arrow-right"></span>تسجيل الدخول</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
    </section>
</body>

</html>