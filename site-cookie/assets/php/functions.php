<?php
    function gerenciaProdutos(){
        if(isset($_COOKIE['categoriaCookie'])){
            if($_COOKIE['categoriaCookie'] == "Smarthphone"){

                gerenciaCelular();
                gerenciaFone();
                gerenciaComputador();
                gerenciaPerifericos();
                gerenciaTablet();

            }else if($_COOKIE['categoriaCookie'] == "Fone de Ouvido"){
                gerenciaFone();
                gerenciaCelular();
                gerenciaComputador();
                gerenciaPerifericos();
                gerenciaTablet();

            } else if($_COOKIE['categoriaCookie'] == "Computador"){
                gerenciaComputador();
                gerenciaCelular();
                gerenciaFone();
                gerenciaPerifericos();
                gerenciaTablet();

            } else if($_COOKIE['categoriaCookie'] == "Periférico"){
                gerenciaPerifericos();
                gerenciaCelular();
                gerenciaFone();
                gerenciaComputador();
                gerenciaTablet();

            } else if ($_COOKIE['categoriaCookie'] == "Tablet") {
                gerenciaTablet();
                gerenciaCelular();
                gerenciaFone();
                gerenciaComputador();
                gerenciaPerifericos();
            }
        } else {
            gerenciaBagunca();
        }
    }

    function gerenciaBagunca(){

        escreveProduto("tablet2.png", "Tablet", "Galaxy Tab A T290","2000.00");
        escreveProduto("iphonexr.jpg", "Smarthphone", "Apple","3600.00");
        escreveProduto("headset1.png", "Fone de Ouvido", "Warrior Ares","550.00");
        escreveProduto("note1.png", "Computador", "Samsung S51","4800.00");
        escreveProduto("mouse1.png", "Periférico", "Logitech SuperLight","870.00");
        escreveProduto("iphonese.png", "Smarthphone", "Apple","3200.00");
        escreveProduto("headset3.png", "Fone de Ouvido", "Xtrime ME","550.00");
        escreveProduto("note2.png", "Computador", "IdeaPad C340","3850.00");
        escreveProduto("mouse2.webp", "Periférico", "Razer Viper Ultimate","420.00");
        escreveProduto("tablet2.png", "Tablet", "Galaxy Tab A T290","2000.00");
        escreveProduto("iPhone12.png", "Smarthphone", "Apple","5100.00");
        escreveProduto("headset2.jpg", "Periférico", "Motospeed","325.00");
        escreveProduto("note3.png", "Computador", "Acer Aspire Nitro 5","1325.00");
        escreveProduto("mouse3.webp", "Periférico", "ReDragon M719","125.00");
        escreveProduto("tablet3.png", "Tablet", "Lenovo Tab P12 Pro","1425.00");
        escreveProduto("note20.png", "Smarthphone", "Samsung","2258.00");
        escreveProduto("airdots2.jpg", "Fone de Ouvido", "Redmi Airdots 2","750.00");
        escreveProduto("cpu1.webp", "Computador", "AMD","897.00");
        escreveProduto("teclado1.png", "Periférico", "Razer Ornata Chroma","1390.00");
        escreveProduto("tablet4.png", "Tablet", "iPad Mini","4390.00");
        escreveProduto("s21.png", "Smarthphone", "Samsung","2460.00");
        escreveProduto("airpods3.png", "Fone de Ouvido", "Apple","1800.00");
        escreveProduto("cpu2.png", "Computador", "AMD","1300");
        escreveProduto("teclado2.png", "Periférico", "Fallen Ace","500");
        escreveProduto("tablet5.png", "Smarthphone", "iPad PRO","14.500");
        escreveProduto("galaxyz.png", "Smarthphone", "Apple","4200.00");
        escreveProduto("fone.png", "Fone de Ouvidos", "Motorola","100.00");
        escreveProduto("cpu3.png", "Computador", "AMD","1230.00");
        escreveProduto("teclado3.png", "Periférico", "AMD","240.00");
        escreveProduto("tablet6.png", "Smarthphone", "iPad Air 4° Geração","4240.00");
    }

    function gerenciaCelular(){

        escreveProduto("iphonexr.jpg", "Smarthphone", "iPhone XR","3600.00");
        escreveProduto("iphonese.png", "Smarthphone", "iPhone SE","3200.00");
        escreveProduto("iPhone12.png", "Smarthphone", "Iphone 12 PRO MAX","5100.00");
        escreveProduto("note20.png", "Smarthphone", "Samsung Note 20","2258.00");
        escreveProduto("s21.png", "Smarthphone", "Samsung Galaxy S20","2460.00");
        escreveProduto("galaxyz.png", "Smarthphone", "Samsung Galaxy Z Fold","4200.00");
    }

    function gerenciaFone(){
        escreveProduto("headset1.png", "Fone de Ouvido", "Warrior Ares","550.00");
        escreveProduto("headset3.png", "Fone de Ouvido", "Xtrime ME","330.00");
        escreveProduto("headset2.jpg", "Fone de Ouvido", "Motospeed","325.00");
        escreveProduto("airdots2.jpg", "Fone de Ouvido", "Redmi Airdots 2","750.00");
        escreveProduto("airpods3.png", "Fone de Ouvido", "Apple","1800.00");
        escreveProduto("fone.png", "Fone de Ouvido", "Motorola","100.00");
    }

    function gerenciaComputador(){
        escreveProduto("note1.png", "Computador", "Samsung S51","4800.00");
        escreveProduto("note2.png", "Computador ", "IdeaPad C340","3850.00");
        escreveProduto("note3.png", "Computador", "Acer Aspire Nitro 5","5325.00");
        escreveProduto("cpu1.webp", "Computador", "AMD","897.00");
        escreveProduto("cpu2.png", "Computador", "AMD","1300");
        escreveProduto("cpu3.png", "Computador", "AMD","1230.00");
    }

    function gerenciaPerifericos(){
        escreveProduto("mouse1.png", "Periférico", "Logitech SuperLight","870.00");
        escreveProduto("mouse2.webp", "Periférico", "Razer Viper Ultimate","420.00");
        escreveProduto("mouse3.webp", "Periférico", "ReDragon M719","125.00");
        escreveProduto("teclado1.png", "Periférico", "Razer Ornata Chroma","1390.00");
        escreveProduto("teclado2.png", "Periférico", "Fallen Ace","500");
        escreveProduto("teclado3.png", "Periférico", "AMD","240.00");
    }
    function gerenciaTablet(){
        escreveProduto("tablet1.png", "Tablet", "Moto Tab 670","2370.00");
        escreveProduto("tablet2.png", "Tablet", "Galaxy Tab A T290","2000.00");
        escreveProduto("tablet3.png", "Tablet", "Lenovo Tab P12 Pro","1425.00");
        escreveProduto("tablet4.png", "Tablet ", "iPad Mini","4390.00");
        escreveProduto("tablet5.png", "Tablet ", "iPad PRO","14.500");
        escreveProduto("tablet6.png", "Tablet", "iPad Air 4° Geração","4240.00");
    }

    function escreveProduto($imagem, $categoria, $nome, $preco){
        echo('
        <div class="menu__content">
            <img src="assets/img/'.$imagem.'" alt="" class="menu__img">
            <h3 class="menu__name">'.$nome.'</h3>
            <span class="menu__detail">'.$categoria.'</span>
            <span class="menu__preci">R$'.$preco.'</span>
            <a href="cookie.php?categoria='.$categoria.'" class="button menu__button"><i class="bx bx-cart-alt"></i></a>
        </div>
        ');
    }
?> 