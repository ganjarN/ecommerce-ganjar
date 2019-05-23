<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/public/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">

            <div class="card-body">
              <h2>Produk</h2>
              <!-- <div class="">
                <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary" > <strong>+</strong>Tambah Produk</a>
              </div> -->

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

                        <a href="<?php echo e(route('public.products.show', $product->id)); ?>">
                            <img src="<?php echo e(asset('icons/svg/si-glyph-view.svg')); ?>" width="25px" height="20px"/>
                        </a>

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