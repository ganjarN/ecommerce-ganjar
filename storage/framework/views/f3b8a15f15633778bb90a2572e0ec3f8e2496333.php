<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/admin/orders/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h2>List Order</h2>
          <div>
            <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary">Tambah Produk</a>
          </div>
          <br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Harga Total</th>
                  <th>Status</th>
                  <th>Kode Pos</th>
                  <th>Alamat Pengiriman</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($order['id']); ?></td>
                    <td><?php echo e($order['total_price']); ?></td>
                    <td><?php echo e($order['status']); ?></td>
                    <td><?php echo e($order['zip_code']); ?></td>
                    <td><?php echo e($order['shipping_address']); ?></td>
                    <td>
                      <a href="<?php echo e(route('admin.orders.show', ['id'=>$order['id']])); ?>"></a>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>