<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/image_gallery.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h2>Tambah Gambar</h2>
          <a href="<?php echo e(route('image_insert')); ?>" class="btn btn-primary">Tambah Gambar</a>
          <hr>
          <br>
          <?php if(!empty($images)): ?>
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4" class="text-center">
                <img src="<?php echo e(url('/image_files/'.$val->image_src)); ?>" class="img-thumbnail" width="300">
                <b><?php echo e($val->image_title); ?></b>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>