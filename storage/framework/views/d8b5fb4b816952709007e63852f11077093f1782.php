<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce-adminLTE/resources/views/carts/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div>
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
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $total= 0 ?>
                  <?php if(session('cart')): ?>
                  <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $total += $product['price'] * $product['quantity']?>

                  <tr>
                    <td data-th="Product">
                      <div class="row">
                        <div class="col-sm-3 hidden-xs">
                          <?php if(!empty($product)): ?>
                          <img src="<?php echo e(url('/image_files/'.$product['image_url'])); ?>" width="100"
                          height="100" class="imge-responsive">
                          <?php endif; ?>
                        </div>
                          <div class="col-sm-9">
                            <h4 class="nomargin"><?php echo e($product['name']); ?></h4>
                          </div>
                      </div>
                    </td>
                    <td data-th="Price"><?php echo e($product['price']); ?></td>
                    <td data-th="Quantity">
                      <input type="number" value="<?php echo e($product['quantity']); ?>" class="form-control quantity">
                    </td>
                    <td data-th="Subtotal" class="text-center">$<?php echo e($product['price'] * $product['quantity']); ?></td>
                    <td class="actions" data-th="">
                      <button class="btn btn-info btn-sm update-cart" data-id="<?php echo e($id); ?>">Update</button>
                      <button class="btn btn-danger btn-sm mt-2 remove-from-cart" data-id="<?php echo e($id); ?>">Remove</button>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%">Aksi</th>
                  </tr>
                  <tr class="visible-xs">
                    <td class="text-center" colspan="5"> <strong>Total <?php echo e($total); ?></strong> </td>
                  </tr>
                  <tr>
                    <td colspan="5">
                      <div class="text-right">
                        <a href="<?php echo e(route('carts.index')); ?>" class="btn btn-warning"> <i class="fa fa-angle-left"></i> Lanjutan  Belanja </a>
                        <a href="<?php echo e(route('admin.orders.create')); ?>" class="btn btn-primary"> <i class="fa fa-angle-left"> Lanjut ke Pembayaran </i></a>
                      </div>
                    </td>
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

    <!-- script jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        // function update carts
        $(".update-cart").click(function(e){
          e.preventDefault();
          console.log('update');
          var ele = $(this);

          $.ajax({
            url: "<?php echo e(route('carts.update')); ?>",
            method: "patch",
            data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function(response){
              window.location.reload();
            }
          });
        });

        // function delete carts
        $(".remove-from-cart").click(function(e){
          e.preventDefault();
          console.log('delete');
          var ele = $(this);

          if(confirm("Are you sure")){
            $.ajax({
              url: "<?php echo e(route('carts.remove')); ?>",
              method: "delete",
              data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
              success: function(response){
                window.location.reload();
              }
            });
          }
        });

      });
    </script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.homeAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>