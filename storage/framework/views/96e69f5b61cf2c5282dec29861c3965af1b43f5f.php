

<?php $__env->startSection('content'); ?>
<h1>Caixa de mensagens</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">Nome</th>
        <th scope="col">Mensagem</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($contact->id); ?></th>
            <td><?php echo e($contact->name_cont); ?></td>
            <td><?php echo e($contact->email_cont); ?></td>
            <td><?php echo e($contact->msg_cont); ?></td>
            <td>
                <form action="<?php echo e(route('contact.destroy',['contact'=>$contact->id])); ?>" method="post">
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn-dash">Excluir</button>
                </form>
            </td>
          </tr>
         
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </tbody>
  </table>
  <a href="#">Voltar</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/admin/contacts/index.blade.php ENDPATH**/ ?>