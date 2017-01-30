<?php $__env->startSection('title', 'IAM A Gamer'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <hr>
    <div class="container">
        <?php if($news->count()): ?>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                <thead align="center">
                       <tr>
                           <th>No</th>
                           <th>Game</th>
                           <th>Judul</th>
                           <th>Foto Game</th>
                           <th>Tanggal</th>
                           <th>Aksi</th>
                       </tr>
                   </thead>
                  <?php foreach($news as $new): ?>
                       <tr>
                          <td align="center"><?php echo e($new->id); ?> </td>
                          <td> <?php echo e($new->game); ?></td>
                          <td> <?php echo e($new->judul); ?> </td>
                          <td> <img src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($new->gambar); ?>" width="200" height="200"></td>
                          <td> <?php echo e($new->tanggal); ?> </td>
                          <td>
                            <a href="<?php echo e($new->link); ?>"><input type="submit" name="submit" value="View"></a>
                          </td>

                       </tr>
                   <?php endforeach; ?>
                </table>
                <ul class="pagination">
                <?php echo $news->render(); ?>

                </ul>
            </div>
        <?php endif; ?>
        </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.new.datauser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>