<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce-adminLTE/resources/views/admin/products/edit.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-12">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">Edit Produk</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <form role="form" action="<?php echo e(route('admin.products.update', $product['id'])); ?>" method="post" enctype="multipart/form-data">
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

                  <label>Deskripsi</label>
                    <textarea id="editor1" name="description" style="width: 100%"><?php echo e($product['description']); ?></textarea>
                    <div class="form-group">
                  </div>
                  <div class="form-group text-right">
                    <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-dark">Back</a>
                    <button type="submit" class="btn btn-primary" name="button">Submit</button>
                  </div>
              </form>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.core', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>