<?php $__env->startSection('title', 'IAM A Gamer'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>



    <hr>
    <div class="container">
     </form>
        <?php if($pembelian->count()): ?>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                <thead align="center">
                       <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>kode Game</th>
                           <th>Jumlah Barang</th>
                           <th>Total Pembayaran</th>
                           <th>Tanggal</th>
                           <th>Aksi</th>
                       </tr>
                   </thead>
                  <?php foreach($pembelian as $beli): ?>
                       <tr>
                          <td align="center"><?php echo e($beli->id); ?> </td>
                          <td> <?php echo e($beli->nama); ?></td>
                          <td> <?php echo e($beli->kode_produk); ?> </td>
                          <td> <?php echo e($beli->jumlah); ?> </td>
                          <td> <?php echo e($beli->jumlah_pembayaran); ?></td>
                          <td> <?php echo e($beli->created_at); ?>

                          <td>
                            <form action="/transaksi/<?php echo e($beli->id); ?>" method="post">
                            <input type="submit" name="submit" value="delete">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            </form>
                            <a href="/pelanggan/<?php echo e($beli->id); ?>"><input type="submit" name="submit" value="view"></a>
                          </td>

                       </tr>
                   <?php endforeach; ?>
                </table>
                <ul class="pagination">
                  <?php echo $pembelian->render(); ?>

                </ul>
            </div>
        <?php endif; ?>
        </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.new.dataadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>