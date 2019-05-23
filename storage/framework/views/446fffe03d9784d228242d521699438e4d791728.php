<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce-adminLTE/resources/views/products/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($idx == 0 | $idx % 4 == 0): ?>
            <div class="row mt-2">
              <?php endif; ?>
              <div class="col-md-3">
                <div class="card shadow">
                  <?php if(!empty($product)): ?>
                  <img src="<?php echo e(url('/image_files/'.$product->image_url)); ?>" class="card-img-top rounded" alt="" >
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
                    <a href="<?php echo e(route('carts.add',['id' => $product['id']])); ?>" class="btn btn-block btn-primary">Beli</a>
                  </div>
                </div>

              </div>
              <?php if($idx > 0 && $idx %4 ==3): ?>
            </div>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>