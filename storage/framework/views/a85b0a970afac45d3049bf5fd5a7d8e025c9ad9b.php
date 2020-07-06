

<?php $__env->startSection('content'); ?>
<h1>Editar</h1>
<form action="<?php echo e(route('student.update',['student'=>$student->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col">
          <label for="name">Nome</label>
          <input type="text"  name="name_stu" value="<?php echo e($student->name_stu); ?>" class="form-control" required minlength="3">
        </div>
        <div class="col">
          <label for="email">Email</label>
          <input type="email" name="email_stu"  value="<?php echo e($student->email_stu); ?>" class="form-control" required>
        </div>
      </div>
      <br>
      
    
    <button type="submit" class="btn-dash">Salvar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/admin/students/edit.blade.php ENDPATH**/ ?>