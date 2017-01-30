<?php $__env->startSection('title', 'IAM A Gamer'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <p>Di sini Kita Mempunya Game Seru Untuk Anda !!</p>
    <hr>
    <div class="container">
    <form action="<?php echo e(url('queryuser')); ?>" method="GET">
                <center>
                <input type="text" class="validate" name="q">
                <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Cari <i class="material-icons right">Produk</i></button>
                </center>
     </form>
        <?php if($produk->count()): ?>
                <table>
                       <tr>
                           <th>No</th>
                           <th>Kode Game</th>
                           <th>Nama Game</th>
                           <th>Harga</th>
                           <th>Foto Game</th>
                           <th>Aksi</th>
                       </tr>
                  <?php foreach($produk as $pro): ?>
                       <tr>
                          <td align="center"><?php echo e($pro->id); ?> </td>
                          <td> <?php echo e($pro->kode_produk); ?></td>
                          <td> <?php echo e($pro->nama_produk); ?> </td>
                          <td> <?php echo e($pro->harga); ?> </td>
                          <td> <img src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($pro->file_gambar); ?>" width="200" height="200"></td>
                          <td><a href="/viewuser/<?php echo e($pro->id); ?>"><input type="submit" name="submit" value="view"></a></td>

                       </tr>
                   <?php endforeach; ?>
                </table>
                <ul class="pagination">
                  <?php echo $produk->render(); ?>

                </ul>
            </div>
        <?php endif; ?>
        </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.new.datauser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>