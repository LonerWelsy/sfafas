
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/cart.css">



</head>

<body>
    <div class="wrapper">
        <header>
            <section class="hapca">
                <div class="hapca_vse">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar__wrap">
                                <a href="index.html" class="logo" id="logo"><img src="assets/img/logo.png" alt="logo"
                                        class="logo"></a>
                                <ul class="menu" id="menu">
                                    <li><a href="menu.php" class="navi">Меню</a></li>
                                    <li><a href="index.php" class="navi">Акции</a></li>
                                    <li><a href="about.html" class="navi">Контакты</a></li>
                                    <li><a href="profile.html" class="navi">Личный кабинет</a></li>
                                    <li><a href="prof.php" class="navi">Вход </a></li>
                                    <li><a href="" class="navi">Корзина</a></li>
                                </ul>
                                <div class="hamb">
                                    <a href=""><img src="assets/img/rarzina.png" alt="" class="carzina"></a>
                                    <div class="hamb__field" id="hamb">
                                        <span class="bar"></span> <span class="bar"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="popup" id="popup"></div>
                </div>
            </section>
        </header>
        <main>
            <br><br>
            <br><br>
            <br><br>

            <main>
            <br><br>
            <div class="vsew">
                    <div class="form__vse">
                        <form action="metod/oplata.php" method="post">
                            <h1 class="hh col__fff ">Оплата</h1>
                            <input type="text" placeholder="Имя" name="name">
                            <input type="text" placeholder="Фамилия" name="lastname">
                            <input type="text" placeholder="Отчество" name="dastname">
                            <input type="text" placeholder="Номер телефона" name="namber">
                            <input type="text" placeholder="Адрес доставки" name="address">
                            <input type="email" placeholder="email" name="email">
                            <div class="cack">
                                <input type="checkbox" id="scales" name="scales" />
                                <label for="scales">
                                    <p class="wai">Оплата наличкой </p>
                                </label>
                            </div>
                            <div class="cack">
                                <input type="checkbox" id="scales" name="scales" />
                                <label for="scales ">
                                    <p class="wai">Оплата переводом</p>
                                </label>
                            </div>
                            <div class="baton_biv">
                                <button type="submit" class="baton bg_fff col__fff col__bord-fff">Оплатить</button>
                            </div>

                        </form>
                    </div>

                    <div class="oblast__pocupac">
                        <div id="my-cart">
                        <div></div>
                        </div>
                    </div>
            </div>
                

        </main>
        </main>
        <footer class="footer">
            <section class="section_footer">
                <p><a href="email.php" class="slog__footer">Ваши отзывы и предложения</a></p>
                <div class="tet">
                    <ul class="text_footer">
                        <li><a href="#navig" class="navi"></a></li>
                        <li><a href="order.html" class="navi">Контакты</a></li>
                        <li><a href="about.html" class="navi">Акции</a></li>
                        <li><a href="login.html" class="navi">Личный кабинет</a></li>
                        <li><a href="otZOv.php" class="navi">Отзывы</a></li>
                    </ul>
                </div>

            </section>
        </footer>
    </div>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/cart.js"></script>
    <script src="assets/js/hh.js"></script>
</body>

</html>