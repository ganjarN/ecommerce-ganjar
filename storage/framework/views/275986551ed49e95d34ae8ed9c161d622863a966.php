<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce-adminLTE/resources/views/admin/products/show.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              Detail Produk
            </h3>
          </div>
          <div class="card-body">

            <div class="col-md-3">
              <img src="<?php echo e(url('/image_files/'.$products['image_url'])); ?>" class="card-img-top" alt="">
            </div>

            <div class="col-md-9">
              <h3>
                <?php echo e($products['name']); ?>

              </h3>
              <h4>
                <?php echo e($products['price']); ?>

              </h4>
              <div class="mt-4">
                <a href="#" class="btn btn-primary">Beli</a>
              </div>
              <div class="mt-4">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#description" role="tab" data-toggle="tab">description</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#review" role="tab" data-toggle="tab">Review</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">

                  <div role="tabpanel" class="tab-pane fade in active show" id="description">
                    <?php echo $products['description']; ?>

                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="review">
                    Content untuk review disini
                  </div>

                </div>
              </div>
            </div>


          </div>
        </div>


      </div>
    </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>