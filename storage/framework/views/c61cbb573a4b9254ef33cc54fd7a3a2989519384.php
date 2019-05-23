<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/public/show.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">

          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="card border-drak mb-3" style="max-width: 18rem;">
            <div class="card-header">Details Produk</div>
            <div class="card-body text-dark">
              <h3 class="card-title"><strong><?php echo e($product->name); ?></strong></3>
                <p class="card-text">Rp. <?php echo e($product->price); ?></p>
                <p class="card-text"><?php echo e(strip_tags($product->description)); ?></p>
                <p class="card-text"> <small> <?php echo e($product->updated_at); ?></small></p>
                <a href="<?php echo e(route('public.products.index')); ?>" class="btn btn-primary" >Kembali</a>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>