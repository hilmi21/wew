<?php $__env->startSection('title', 'IAM A Gamer'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/css/css.css"/>
    <h1>Create Data Produk</h1>
    <?php if(count($errors) > 0): ?>
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
<?php endif; ?>
    <hr>
    <div class="container">
    <form action="<?php echo e(url('data')); ?>" method="POST" enctype="multipart/form-data">
    <p>Kode Produk :</p><input type="text" name="kode_produk" ><br>
    <p>Nama Produk :</p>    <input type="text" name="nama_produk"><br>
    <p>Spek Produk :</p>    <textarea name="spek" rows="8" cols="80"></textarea><br>
    <p>Harga Produk :</p>    <input type="text" name="harga"><br>
    <p>Link You Tube :</p>    <input type="text" name="youtube" ><br>
    <p>Foto  :</p>    <input type="file" name="file_gambar"><br>
    <hr />
    <center>
        <input type="submit" value="create">
    </center>
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="_method" value="PUT">
    </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.new.dataadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>