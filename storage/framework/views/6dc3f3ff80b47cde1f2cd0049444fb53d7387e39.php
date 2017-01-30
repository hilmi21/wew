<?php $__env->startSection('title', 'IAM A Gamer'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>




    <hr>
    <h3>The Gamers Users</h3>
    <div class="container">
    <h4>User Profil Data</h4>
    <?php if($users->count()): ?>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
            <thead align="center">
                   <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>Username</th>
                       <th>Email</th>
                       <th>Delete</th>
                   </tr>
               </thead>
              <?php foreach($users as $user): ?>
                   <tr>
                      <td align="center"><?php echo e($user->id); ?> </td>
                      <td> <?php echo e($user->name); ?></td>
                       <td> <?php echo e($user->username); ?></td>
                      <td> <?php echo e($user->email); ?> </td>
                    <td>
                     <form action="/user/<?php echo e($user->id); ?>" method="post">
                     <input type="submit" name="submit" value="delete"><?php echo e(csrf_field()); ?>

                     <input type="hidden" name="_method" value="DELETE">
                     </form>
                    </td>

                   </tr>
               <?php endforeach; ?>
            </table>
            <ul class="pagination">
                  <?php echo $users->render(); ?>

                </ul>
        </div>
    <?php endif; ?>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.new.dataadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>