<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Aline Iasmim, Priscila Agda, Daphne Helena">
        <meta name="description" content="A Empresa Fatec Júnior é formada por alunos comprometidos em desenvolver melhorias para alavancar micro e pequenas empresas no mercado local, por meio de consultorias que possibilitem aos empreendedores encontrarem novas oportunidades e experiências com os clientes. Buscamos  integrar discente, docentes e empresas reais, com problemas reais. Assim colaboramos e preparamos os alunos envolvidos nas empresas a enfrentar o mercado de trabalho.">
        <meta name="keywords" content="Empresa Júnior Taquaritinga, Fatec Taquaritinga, Empresas Taquaritinga, Fatec, Empresa Júnior.">
        <meta http-equiv="content-language" content="pt-br" />
        <meta name="copyright" content="© 2020 Fatec Jr." />
        <meta name="rating" content="general" />
        <title>Início - Fatec Jr.</title>
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/style2.css')?>" type="text/css">
        <script src="https://kit.fontawesome.com/1060000e07.js " crossorigin="anonymous "></script>
    </head>
    <body>
        <section class="banner">

            <h1 class="title1"> Venha fazer parte da nossa equipe!
            </h1>
            <a href="#gotovalor" class="btn-banner2"> Nossos valores</a>
            <img src="img/foguete-inicial.svg" alt="banner da fatec jr.">
        
        </section>
        
        <section class="services" title="Seção de valores da Fatec Jr">
            <p><strong class="title" id="gotovalor">Nossos valores</strong></p>
            <hr class="border">
            <div class="cen">
                <div class="service">
                    <i class="fas fa-stethoscope" title="ícone de estetoscópio"></i>
                    <h2>Diagnosticar</h2>
                    <p> Realizar e elaborar diagnósticos e relatórios sobre assuntos específicos inseridos em sua área de formação profissional, assessorar a implantação de soluções indicadas para problemas diagnosticados. Desenvolvendo o espírito empreendedor
                        dos futuros profissionais.
                    </p>
                </div>
        
                <div class="service">
                    <i class="far fa-check-circle" title="ícone de OK"></i>
                    <h2>Desenvolver</h2>
                    <p>Prestar serviços e desenvolver projetos para empresas, entidades e sociedade em geral, nas suas áreas de atuação, proporcionando a intensificação do intercâmbio Empresa/Escola e facilitando a absorção dos futuros profissionais no mercado
                        de trabalho. </p>
                </div>
        
                <div class="service">
                    <i class="fas fa-undo" title="ícone de flecha retornar"></i>
                    <h2>Retornar</h2>
                    <p>Dar à sociedade um retorno dos investimentos que a Empresa Júnior realiza na Faculdade de Tecnologia de Taquaritinga, por meio de serviços de alta qualidade que são realizados por futuros profissionais. Valorizando alunos e docentes da
                        Faculdade de Tecnologia
                    </p>
                </div>
        
            </div>
            <hr class="border">
        </section>
        <h2 class="title" data-anime="top">Nós precisamos de você!</h2>
        <div class="imgsobre">
            <div>
                <img src="img/amigos.svg" data-anime="left" alt="amigos fazendo hi-five">
            </div>
            <div>
                <p class="textsobre" data-anime="right">Somos uma associação sem fins lucrativos. Os valores cobrados nos serviços servem para cobrir gastos com ferramentas para auxiliar no trabalho. Nenhum de nossos colaboradores são remunerados. As atividades são voluntárias e todos os envolvidos
                    possuem o mesmo objetivo: aprender com os desafios atribuídos, além de terem a oportunidade de ajudar a quem precisa. Se interessou por ser um colaborador?
                    <a href="www.google.com" style="color: #d63031 ">clique aqui</a> para participar da seletiva (ou leia nosso artigo).
                </p>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo asset('js/function.js')?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/layouts/index.blade.php ENDPATH**/ ?>