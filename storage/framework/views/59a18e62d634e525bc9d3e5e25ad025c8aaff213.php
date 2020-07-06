
    
    
    <?php $__env->startSection('title-site'); ?>
    Eventos - Fatec Jr.
<?php $__env->stopSection(); ?>
    <header>
        <nav class="desktop">
            <ul>
                <a href="/"><img src="img/Logo-Fatec-Jr-RGB1.svg" alt="logotipo da fatec jr." class="logo"> </a>
                <li class="items items-hover"><a href="/" accesskey="1" title="Início [ALT+1]">Início</a></li>
                <li class="items items-hover"><a href="/sobre" accesskey="2" title="Sobre [ALT+2]">Sobre</a></li>
                <li class="items items-hover"><a href="/projetos" accesskey="3" title="Projetos [ALT+3]">Projetos</a></li>
                <li class="items items-hover"><a href="/eventos" accesskey="4" title="Eventos [ALT+4]">Eventos</a></li>
                <li class="items items-hover"><a href="/contato" accesskey="5" title="Contato [ALT+5]">Contato</a></li>
                <li class=" items login "><a href="/login" accesskey="6" title="Login [ALT+6]">Login</a></li>
    
            </ul>
    
        </nav>
        <div>
            <a href="#menu" class="btnMenu btnMenu_open">Menu</a>
            <ul id="menu" class="menu">
                <li class="btnMenu btnMenu_close">Sair</li>
                <li class="menu-item">
                    <a href="/" class="menu-item-action" accesskey="1" title="Início [ALT+1]">Início</a>
                </li>
                <li class="menu-item">
                    <a href="/sobre" class="menu-item-action" accesskey="2" title="Sobre [ALT+2]">Sobre</a>
                </li>
                <li class="menu-item">
                    <a href="/projetos" class="menu-item-action" accesskey="3" title="Projetos [ALT+3]">Projetos</a>
                </li>
                <li class="menu-item">
                    <a href="/eventos" class="menu-item-action" accesskey="4" title="Eventos [ALT+4]">Eventos</a>
                </li>
                <li class="menu-item">
                    <a href="/contato" class="menu-item-action" accesskey="5" title="Contato [ALT+5]">Contato</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item-action" accesskey="6" title="Login [ALT+6]">Login</a>
                </li>
            </ul>
        </div>
    
    </header>
     
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
        <form action="<?php echo e(route('eventos.salvar')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" placeholder="Nome" name="name_stu" class="nome"  required minlength="3"/>
            <input type="email" placeholder="E-mail" name="email_stu" class="email" required />
            <p><input type="checkbox" name="checked" required checked>Sim, eu li todo o <a href="#">regulamento.</a>👍</p>
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

    
    <iframe src="https://giphy.com/embed/f6UK16YWd0g2iv1vny" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>

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
<footer>
    <img src="img/Logo-Fatec-Jr-RGB1.svg" alt="logotipo da fatec jr.">

    <ul class="list-footer">
        <li><a href="/" accesskey="1" title="Início [ALT+1]">Início</a></li>
        <li><a href="/sobre" accesskey="2" title="Sobre [ALT+2]">Sobre</a></li>
        <li><a href="/projetos" accesskey="3" title="Projetos [ALT+3]">Projetos</a></li>
        <li><a href="/eventos" accesskey="4" title="Eventos [ALT+4]">Eventos</a></li>
        <li><a href="/contato" accesskey="5" title="Contato [ALT+5]">Contato</a></li>
        <li><a href="/login" accesskey="6" title="Login [ALT+6]">Login</a></li>
    </ul>
    <div class="social-media">
        <a href="https://www.instagram.com/fatectq/?hl=pt-br"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/FatecTQ"><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/company/fatec-taquaritinga/"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.facebook.com/fatec.taquaritinga/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
    </div>

    <p class="copyrights">&copy; 2020 Fatec Jr.</p>
</footer>

<script type="text/javascript" src="<?php echo asset('js/function.js')?>"></script>



<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/pages/events.blade.php ENDPATH**/ ?>