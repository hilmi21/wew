<?php $__env->startSection('title', 'IAM A Gamer'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Welcome to GamerZone</h1>
    <h2>No Game No Life</h2>
    <hr>

    <p>Nama : <?php echo e($pelanggan->nama); ?></p>
    <p>Nomor Ktp : <?php echo e($pelanggan->nomor_ktp); ?></p>
    <p>Foto Ktp : </p>
    <img src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($pelanggan->foto_ktp); ?>" width="200" height="200">
    <p>No Hp: <?php echo e($pelanggan->no_hp); ?></p>
    <p>Alamat : <?php echo e($pelanggan->alamat); ?></p>
    <p>Kode Game : <?php echo e($pelanggan->kode_produk); ?></p>
    <p>Harga Game : <?php echo e($pelanggan->harga); ?></p>
    <p>Jumlah Barang : <?php echo e($pelanggan->jumlah); ?></p>
    <p>Total Pembayaran : <?php echo e($pelanggan->jumlah_pembayaran); ?></p>
    <p>Tanggal Transaksi : <?php echo e($pelanggan->created_at); ?></p>
    <p>Via : <?php echo e($pelanggan->via); ?></p>
   
    <hr>
                



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.new.dataadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>