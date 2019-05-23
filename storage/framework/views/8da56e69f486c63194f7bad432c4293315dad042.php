<?php /* D:\0 - Zulkipli Bin Suhib\Project_Zulkipli_fix\resources\views/admin/products/edit.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h2>Edit Produk</h2>
          <br>

          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form action="<?php echo e(route('admin.products.update', $product['id'])); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo method_field('PATCH'); ?>

            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" name="name" class="form-control" placeholder="Nama Produk" value="<?php echo e($product['name']); ?>" required>
            </div>

            <div class="form-group">
              <label>Harga</label>
              <input type="number" name="price" class="form-control" placeholder="Harga Produk" value="<?php echo e($product['price']); ?>" required>
            </div>

            <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="description" class="form-control" rows="3" id="ckview" placeholder="Deskripsi" required><?php echo e($product['description']); ?></textarea>
            </div>
            <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-dark">Back</a>
            <button type="submit" class="btn btn-primary" name="button">Submit</button>
          </form>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>

<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/jquery.tinymce.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript">tinymce.init({ selector:'#ckview'})</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>