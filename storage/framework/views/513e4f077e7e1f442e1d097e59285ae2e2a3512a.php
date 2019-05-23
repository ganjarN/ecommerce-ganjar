<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/admin/products/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-12">
          <div class="card">

            <div class="card-body">
              <h2>Produk</h2>
              <div class="">
                <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary" > <strong>+</strong>Tambah Produk</a>
              </div>

              <div class="table-responsive">
                <table class="table table-striped table-md">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1 ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($no++); ?></td>
                      <td><?php echo e($product->name); ?></td>
                      <td><?php echo e($product->price); ?></td>
                      <td><?php echo e(strip_tags($product->description)); ?></td>
                      <td class="text-center" >

                        <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>">
                          <button type="button" class="">
                            <img src="<?php echo e(asset('icons/svg/si-glyph-edit.svg')); ?>" width="14px" height="14px"/>
                          </button>
                        </a>

                        <a href="<?php echo e(route('admin.products.show', $product->id)); ?>">
                          <button type="button" class="">
                            <img src="<?php echo e(asset('icons/svg/si-glyph-view.svg')); ?>" width="14px" height="14px"/>
                          </button>
                        </a>

                        <a href="<?php echo e(route('admin.products.show', $product->id)); ?>">
                          <button type="button" class="">
                            <img src="<?php echo e(asset('icons/svg/si-glyph-image.svg')); ?>" width="14px" height="14px"/>
                          </button>
                        </a>

                        <form class="" action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="post">
                          <?php echo e(csrf_field()); ?>

                          <?php echo method_field('DELETE'); ?>

                          <button type="submit" name="button">
                            <img src="<?php echo e(asset('icons/svg/si-glyph-trash.svg')); ?>" width="14px" height="14px"/>
                          </button>
                        </form>

                      </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  <?php $__env->stopSection(); ?>
  

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>