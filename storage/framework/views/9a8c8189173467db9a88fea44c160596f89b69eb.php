<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/products/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($idx == 0 | $idx % 4 == 0): ?>
            <div class="row mt-4">
              <?php endif; ?>

              <div class="col-md-3">
                <div class="card">
                  <?php if(!empty($product)): ?>
                  <img src="<?php echo e(url('/image_files/'.$product->image_url)); ?>" class="card-img-top" alt="" >
                  <?php endif; ?>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a href="<?php echo e(route('products.show', ['id'=> $product['id']])); ?>">
                        <?php echo e($product->name); ?>

                      </a>
                    </h5>
                    <p class="card-text">
                      <?php echo e($product->price); ?>

                    </p>
                    <a href="<?php echo e(route('carts.add',['id' => $product['id']])); ?>" class="btn btn-primary">Beli</a>
                  </div>
                </div>

              </div>
              <?php if($idx > 0 && $idx %4 ==3): ?>
            </div>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>