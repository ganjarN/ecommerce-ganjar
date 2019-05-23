<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce-adminLTE/resources/views/admin/orders/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Order</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Harga Total</th>
                    <th>Status</th>
                    <th>Kode Pos</th>
                    <th>Alamat Pengiriman</th>
                    <th>Aksi</th>
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
                        <a href="<?php echo e(route('admin.orders.show', ['id'=>$order['id']])); ?>" class="btn btn-info btn-sm">Show</a>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Harga Total</th>
                  <th>Status</th>
                  <th>Kode Pos</th>
                  <th>Alamat Pengiriman</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.core', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>