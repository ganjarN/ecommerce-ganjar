<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/admin/products/created.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h2>Edit Produk</h2>
          <br>

          <form action="<?php echo e(route('admin.products.store')); ?>" method="post">
            <?php echo e(csrf_field()); ?>


            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="name" class="form-control" placeholder="Nama Produk" required>
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="number" name="price" class="form-control" placeholder="Harga Produk" required>
            </div>

            <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="description" class="form-control" rows="3" id="ckview" placeholder="Deskripsi" required></textarea>
            </div>
            <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-dark">Back</a>
            <button type="submit" class="btn btn-primary" name="button">Submit</button>
          </form>

        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>

<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/jquery.tinymce.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript">tinymce.init({ selector:'#ckview'})</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>