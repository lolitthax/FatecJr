
    
    
    <?php $__env->startSection('title-site'); ?>
    Contato - Fatec Jr.
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
       
        <section class="wrapper-section">
            <div class="content" title="Formulário de contato">
                <h2 class="title" id="gotoform">Fale com a gente (ou com o Pato Danúbio) <span> </span></h2>
                <hr class="border" />
               <p class="text">Adoraríamos receber uma mensagem sua! ainda mais o Danúbio, nosso mascote🦆</p>

                <form action="<?php echo e(route('contato.salvar')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" placeholder="Nome" name="name_cont" class="nome" required minlength="3" />
                    <input type="email" placeholder="E-mail" name="email_cont" class="email" required/>
                    <textarea name="msg_cont" class="nome" cols="30" rows="10" required></textarea>
                    <p title="onomatopeia de som do pato">quac-quac</p>
                    
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="wrapper-div">
                <img class="photo"  src="img/imagem-contato.svg" alt="Ilustração de amigos juntos" />
            </div>
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
    

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/pages/contact.blade.php ENDPATH**/ ?>