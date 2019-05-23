<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/admin/orders/show.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="row">
            <div class="col">
              <h3>
                <span class="badge badge-primary" >Alamat Pengiriman</span>
              </h3>
               <p><?php echo e($order->shipping_address); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>
                <span class="badge badge-primary">Kode Pos</span>
              </h3>
              <p><?php echo e($order->zip_code); ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h3>
              <span class="badge badge-primary">Harga Total</span>
            </h3>
            <p><?php echo e($order->total_price); ?></p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col">
          <table id="cart" class="table table-hover table-condensed">
            <thead>
              <tr>
                <th style="width:50%">Product</th>
                <th style="width:10">Price</th>
                <th style="width:8">Quantity</th>
                <th style="width:22" class="text-center">Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td data-th="Product">
                    <div class="row">
                      <div class="col-sm-3 hidden-xs">
                        <a href="<?php echo e(route('products.image', ['imageName'=> $orderItem->product->image_url])); ?>" hidden></a>
                        <img src="<?php echo e(url('/image_files/'.$orderItem->product->image_url)); ?>" width="100" height="100" class="img-responsive">
                      </div>
                      <div class="col-md-9">
                        <a href="<?php echo e(route('products.show', ['id' => $orderItem->product->id])); ?>">
                          <h4 class="nomargin"><?php echo e($orderItem->product->name); ?></h4>
                        </a>
                      </div>
                    </div>
                  </td>
                  <td data-th="Price">
                    <?php echo e($orderItem->price); ?>

                  </td>
                  <td data-th="Quantity">
                    <?php echo e($orderItem->quantity); ?>

                  </td>
                  <td data-th="Subtotal" class="text-center">
                    <?php echo e($orderItem->price * $orderItem->quantity); ?>

                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>