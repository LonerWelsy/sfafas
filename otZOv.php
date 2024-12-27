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

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">
                            Комментарии
                        </h2>
            
                    <div class="col-lg-6">
                        </div>
                    <form>
                            <div class="form-group">
                              <label for="comment-name">Name:</label>
                              <input type="email" class="form-control" id="comment-name"  placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                              <label for="comment-body">Comment:</label>
                              <br>
                              <textarea type="text" class="form-control" id="comment-body" placeholder="comment"></textarea>
                            </div>
                            <div class="form-group form-check text-right">
                                    <button type="submit" id="comment-add" class="btn btn-primary baton">Добавить </button>
                            </div>
                          </form>
                    </div>
                    <div class="col-lg-6">
                        <div id="comment-field"></div>
                    </div>

                </div>
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
    <script src="assets/js/hh.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="assets/js/js.js"></script>
</body>

</html>