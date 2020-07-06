

<?php $__env->startSection('content'); ?>
<h1>Participantes #Pentakill 2020</h1>

<a href="<?php echo e(route('student.create')); ?>">Cadastrar Participantes</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">Nome</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($student->id); ?></th>
            <td><?php echo e($student->email_stu); ?></td>
            <td><?php echo e($student->name_stu); ?></td>
            <td> <a href="<?php echo e(route('student.edit',['student'=>$student->id])); ?>"> Editar</a></td>
            <td><form action="<?php echo e(route('student.destroy',['student'=>$student->id])); ?>" method="post">
                <?php echo csrf_field(); ?> 
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn-dash">Excluir</button>
            </form></td>
          </tr>
         
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </tbody>
  </table>
  <a href="#">Voltar</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projeto-FatecJr\resources\views/admin/students/index.blade.php ENDPATH**/ ?>