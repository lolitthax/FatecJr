<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Aline Iasmim, Priscila Agda, Daphne Helena">
        <meta name="description" content="Fique por dentro dos eventos da Fatec Jr! Conheça o PENTAKILL, não tem um time? não se preocupe! nós ajudamos você a encontram seu 'dream team'">
        <meta name="keywords" content="Empresa Júnior Taquaritinga, Fatec Taquaritinga, Empresas Taquaritinga, Fatec, Empresa Júnior.">
        <meta http-equiv="content-language" content="pt-br" />
        <meta name="copyright" content="© 2020 Fatec Jr." />
        <meta name="rating" content="general" />
        <title>Eventos - Fatec Jr.</title>
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/style2.css')?>" type="text/css">
        <script src="https://kit.fontawesome.com/1060000e07.js " crossorigin="anonymous "></script>
    </head>
    <body>
     
<section class="banner">
    <h1 class="title1">Pentakill 2020</h1>
    <p> Vocês pediram e Fatec Jr. atendeu! venha participar do Campeonato <span style="text-transform: uppercase;"> Pentakill Fatec 2020!</span>
    </p>
    <a href="#" class="btn-banner1">Saiba mais</a> <a href="#gotoform" class="btn-banner2"> Participe</a>
    <img src="img/banner-eventos.svg" alt="Amigos jogando vídeo-game juntos">

</section>

<section class="wrapper-section">
    <div class="content" title="Formulário de inscrição">
        <h2 class="title" id="gotoform">Quero participar!</h2>
        <hr class="border" />
        <p class="text">Para participar é <span style="color: #d63031">GG IZI</span>! basta colocar suas informações no formulário abaixo e aguardar um e-mail nosso ❤️
        </p>
        <form action="#" method="#">
            <input type="text" placeholder="Nome" name="nome" class="nome" />
            <input type="email" placeholder="E-mail" name="email" class="email" />
            <input type="text" placeholder="Nickname/Apelido" name="nickname" class="nickname" />
            <p><input type="checkbox" name="checked" id="chk">Sim, eu li todo o <a href="#">regulamento.</a>👍</p>
            <button type="submit">Inscrever-se</button>
        </form>
    </div>

    <div class="wrapper-div" title="Perguntas Frequentes">
        <h2 class="title">f.a.q</h2>
        <hr class="border" />
        <div class="container">
            <div class="accordion">
                <div class="accordion-item">
                    <p class="accordion-link">
                        # A competição é paga?
                    </p>
                    <div class="answer">
                        <p>
                            Sim, para participar cada integrante do time deve pagar uma taxa de R$5,00. O pagamento deve ser realizado no dia e no local do evento
                        </p>

                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-link">
                        # Somente estudantes da fatec e etec participam?
                    </p>
                    <div class="answer">
                        <p>
                            Nananinanão! O evento é aberto para todos os públicos independente das instituições de ensino ou idade.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-link">
                        #Não tenho um time, e agora?
                    </p>
                    <div class="answer">
                        <p>
                            Acalme-se, ao se inscrever você receberá um e-mail que irá te redirecionar ao nosso servidor do Discord para lhe ajudar a escolher uma equipe.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <img class="photo" data-anime="left" src="img/vencedores.svg" alt="Ilustração de amigos vencedores com uma faixa de campeão" />

    <div class="container-timeline" title="seção de datas e horários do evento">
        <div class="content-timeline color1" title="Começo e término das inscrições">
            <h2> <time datetime="10/09/2020"> 10/09 </time> à <time datetime="10/10/2020">  10/10/2020 </time></h2>
            <p>Começo e término das inscrições</p>
        </div>
        <div class="content-timeline color2" title="Dia das formações de equipe">
            <h2> <span style="color:#ffa502"> <time datetime="11/10/2020">11/10</time> à <time datetime="15/10/2020"> 15/10/2020</time> até as 23h:59min</span> </h2>
            <p>Formação de equipes</p>
        </div>
        <div class="content-timeline color3" title="Dia do evento">
            <h2> <span style=" color: #2ecc71 "> <time datetime="20/10/2020">20/10/2020</time> das 08:00 às 19:00</span> </h2>
            <p>Dia do evento</p>



        </div>
        <div class="content-timeline color4" title="Mais informações">
            <h2> <span style="color: #2980b9">Precisa de mais informações?</span></h2>

            <p> Psiu! Você já...leu o nosso <a href="http://google.com" target="_blank" rel="noopener noreferrer"><span>regulamento</span></a> hoje? rsrs &#128540;
            </p>

        </div>

    </div>
    <div class="team-div">
        <h2 class="title">Organizadores</h2>
        <hr class="border" />
        <div class="person">
            <div class="po">
                <img src="img/aline.jpg" alt="Foto da participante Aline Iasmim">
                <p class="p-name">Aline Iasmim</p>

            </div>
            <div class="po">
                <img src="img/daphne.jpg" alt="Foto ds participante Daphne Helena">
                <p class="p-name">Daphne Helena</p>

            </div>

            <div class="po">
                <img src="img/sammy.jpg" alt="Foto do participante Luís Fante">
                <p class="p-name">Samuel Pinheiro</p>

            </div>

            <div class="po">
                <img src="img/pri.jpg" alt="Foto da participante Priscila Agda">
                <p class="p-name">Prisicila Agda</p>

            </div>

        </div>

    </div>

    <img class="photo" data-anime="right" src="img/player.svg" alt="Ilustração de amigos se cumprimentando" />

</section>

        <script type="text/javascript" src="<?php echo asset('js/function.js')?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/layouts/events.blade.php ENDPATH**/ ?>