<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Electronics store</title>
    </head>
        
    <body>
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Electronics store</a> 

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#inicio" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Smartphones</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Fones</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Computadores</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Periféricos</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Tablets</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <section class="home" id="inicio">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Produtos</h1>
                        <h2 class="home__subtitle">em promoção</h2>
                        <a href="#celulares" class="button">Go Shopping</a>
                    </div>
                    <img src="assets/img/home.jpg" alt="" class="home__img">
                </div>
            </section>

            <section class="menu section bd-container" id="celulares" name="celulares">
                <span class="section-subtitle">Especial</span>
                <h2 class="section-title">Menu do dia</h2>

                <div class="menu__container bd-grid">

                    <?php 
                        require("assets/php/functions.php");
                        gerenciaProdutos();
                    ?>
                </div>
                </div> <!--Final-->
            </section>

        </main>

        <!-- FOOTER -->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Electronics Store</a>
                    <span class="footer__description">E-commerce</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Mapa</h3>
                    <ul>
                        <li><a href="#inicio" class="footer__link">Inicio</a></li>
                        <li><a href="#" class="footer__link">Smartphones</a></li>
                        <li><a href="#" class="footer__link">Fones</a></li>
                        <li><a href="#" class="footer__link">Computadores</a></li>
                        <li><a href="#" class="footer__link">Periféricos</a></li>
                        <li><a href="#" class="footer__link">Tablets</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Informações</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Razão Social</a></li>
                        <li><a href="#" class="footer__link">Trabalhe Conosco</a></li>
                        <li><a href="#" class="footer__link">Politica de Privacidade</a></li>
                        <li><a href="#" class="footer__link">Termos de Serviço</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Endereço</h3>
                    <ul>
                        <li>São Paulo - Brasil</li>
                        <li>Av. Oceano Atlântico, 123</li>
                        <li>178 - 190 -431</li>
                        <li>eletronicsstore@email.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2022, Lorena Araujo Almeida | Karina Yumi Ferreira Pinto. Todos os direitos reservados!</p>
        </footer>
    </body>
</html>