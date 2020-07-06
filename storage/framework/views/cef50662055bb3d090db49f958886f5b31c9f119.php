

<?php $__env->startSection('title-site'); ?>
Login - Fatec Jr.
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
            <li class=" items login "><a href="/entrar" accesskey="6" title="Login [ALT+6]">Login</a></li>

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
                <a href="/entrar" class="menu-item-action" accesskey="6" title="Login [ALT+6]">Login</a>
            </li>
        </ul>
    </div>

</header>
    <img src="img/fundo.svg" alt="" class="fundo2">
    <div class="login02">

        <h1><?php echo e(__('Login')); ?></h1>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <label for="email" class="usuario02"><?php echo e(__('E-Mail')); ?></label>
            <input id="email" type="email" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
              <strong><?php echo e($message); ?></strong>
             </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="password" class="usuario02"><?php echo e(__('Senha')); ?></label>
            <input id="password" type="password" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="password" required autocomplete="current-password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php if(Route::has('password.request')): ?>
            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Esqueceu sua senha?')); ?>

            </a>
            <?php endif; ?>

            <input  type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

            <label class="form-check-label" for="remember">
                <?php echo e(__('Remember Me')); ?>

            </label>
            <button type="submit" class="btn-banner2">
                <?php echo e(__('Login')); ?>

            </button>
          
           
        </form>
    </div>

   


<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts/site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/pages/login.blade.php ENDPATH**/ ?>