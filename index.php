<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once './connection.php';
require './lib/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio Gerson</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Gerson</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Sobre</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Habilidades</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Portfólio</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contato</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Oi,<br>Eu sou <span class="home__title-color">Gerson</span><br> Designer e<br>Programador</h1>

                    <a href="#contact" class="button">Contato</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/perfil.png" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">Sobre</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Eu sou Gerson,</h2>
                        <p class="about__text">sou designer e programador especialista na criação de Landing Pages, E-books, Thumbnails, Artes visuais e outros. Ajudo pessoas e empresas a construirem sua indentidade visual para atrair novos clientes e gerar mais vendas.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Habilidades</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Habilidades Profissionais</h2>
                        <p class="skills__text">Confira abaixo algumas de minhas principais habilidades para te ajudar em seu negócio. </p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">Photoshop</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">100%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work03.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Portfólio</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <a href="https://soumemoravel.com.br/inscricao-fale/"><img src="assets/img/work1.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                        <a href="https://play.anajords.com"><img src="assets/img/work2.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                        <a href="https://metodoip.com.br/metodo-ip-128-inscricao/"><img src="assets/img/work3.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                        <a href="https://abasedetudo.com.br/familia/"><img src="assets/img/work5.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                        <a href="https://lp.luanacarolinas.com.br"><img src="assets/img/work4.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                        <a href="https://deboramarina.com.br/debora/"><img src="assets/img/work6.jpg" alt=""></a>
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contato</h2>

                <div class="contact__container bd-grid">
                <?php
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data['SendAddMsg'])) {
            $attachment = $_FILES['attachment'];
            //var_dump($data);
            //var_dump($attachment);
            $query_msg = "INSERT INTO contacts_msgs (name, email, subject, content, file, created) VALUES (:name, :email, :subject, :content, :file, NOW())";
            $add_msg = $conn->prepare($query_msg);

            $add_msg->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $add_msg->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $add_msg->bindParam(':subject', $data['subject'], PDO::PARAM_STR);
            $add_msg->bindParam(':content', $data['content'], PDO::PARAM_STR);
            $add_msg->bindParam(':file', $attachment['name'], PDO::PARAM_STR);

            $add_msg->execute();

            if ($add_msg->rowCount()) {
                $mail = new PHPMailer(true);
                try {
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host = 'mail.loudgaming.com.br';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'contato@loudgaming.com.br';
                    $mail->Password = '#Gerson1989';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;

                    //Enviar e-mail para o cliente
                    $mail->setFrom('contato@loudgaming.com.br', 'contato');
                    $mail->addAddress($data['email'], $data['name']);

                    $mail->isHTML(true);
                    $mail->Subject = 'Recebi a mensagem de contato';
                    $mail->Body = "Prezado(a) " . $data['name'] . "<br><br>Recebi o seu e-mail.<br>Será lido o mais rápido possível.<br>Em breve será respondido.<br><br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                    $mail->AltBody = "Prezado(a) " . $data['name'] . "\n\nRecebi o seu e-mail.\nSerá lido o mais rápido possível.\nEm breve será respondido.\n\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];

                    $mail->send();

                    $mail->clearAddresses();

                    //Enviar e-mail para o colaborador da empresa
                    $mail->setFrom('contato@loudgaming.com.br', 'contato');
                    $mail->addAddress('iscosilvabh@gmail.com', 'Gerson');

                    if ((isset($attachment['name'])) AND (!empty($attachment['name']))) {
                        $mail->addAttachment($attachment['tmp_name'], $attachment['name']);
                    }

                    $mail->isHTML(true);
                    $mail->Subject = $data['subject'];
                    $mail->Body = "Nome: " . $data['name'] . "<br>E-mail: " . $data['email'] . "<br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                    $mail->AltBody = "Nome: " . $data['name'] . "\nE-mail: " . $data['email'] . "\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];

                    $mail->send();
                    unset($data);

                    if ((isset($attachment['name'])) AND (!empty($attachment['name']))) {
                        ///Recuperar último ID inserido no banco de dados
                        $last_id = $conn->lastInsertId();
                        
                        //Diretório onde o arquivo será salvo
                        $directory = 'images/' . $last_id . "/";
                        
                        //Criar o diretório
                        mkdir($directory, 0755);
                        
                        //Upload do arquivo
                        $file = $attachment['name'];
                        move_uploaded_file($attachment['tmp_name'], $directory . $file);
                    }

                    echo "Mensagem de contato enviada com sucesso!<br>";
                } catch (Exception $e) {
                    echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
                }
            } else {
                echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
            }
        }
        ?>
                    <form action="" class="contact__form">
                        <input class="contact__input" type="text" name="name" id="name" placeholder="Seu nome" value="<?php
            if (isset($data['name'])) {
                echo $data['name'];
            }
            ?>" autofocus required>
                        <input class="contact__input" type="email" name="email" id="name" placeholder="Seu e-mail"  value="<?php
            if (isset($data['email'])) {
                echo $data['email'];
            }
            ?>" required>
                        <textarea cols="0" rows="10" class="contact__input" type="text" name="content" id="content" placeholder="Sua mensagem"  value="<?php
            if (isset($data['content'])) {
                echo $data['content'];
            }
            ?>" required></textarea>
                        <input type="submit" value="Enviar" name="SendAddMsg" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Gerson</p>
            <div class="footer__social">
                <a href="https://www.facebook.com/gersonfsilvabh/" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/ogerson.silva" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://api.whatsapp.com/send?phone=5531999870081&text=Oi%20Gerson,%20Gostaria%20de%20fazer%20um%20orçamento." class="footer__icon"><i class='bx bxl-whatsapp' ></i></a>
            </div>
            <p>&#169; 2021 copyright all right reserved | Gerson Silva</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>