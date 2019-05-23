<?php /* D:\0 - Zulkipli Bin Suhib\Project_Zulkipli\resources\views/admin/orders/create.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h2>Menambahkan Alamat</h2>
          <br>
          <?php if(count($errors)): ?>
            <div class="form-group">
              <div class="alert alert-danger">
                <ul>
                  <?php $__currentLoopData = $error->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e(error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            </div>
          <?php endif; ?>
          <br>

          <form action="<?php echo e(route('admin.orders.store')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <label>Alamat Pengiriman</label>
                <textarea name="shipping_address" class="form-control" rows="3" placeholder="Alamat Pengiriman"></textarea>
              </div>
              <div class="form-group">
                <label>Kode Pos</label>
                <input type="number" name="zip_code" class="form-control" placeholder="Kode Pos">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>