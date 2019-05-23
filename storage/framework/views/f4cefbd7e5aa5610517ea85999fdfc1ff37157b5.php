<?php /* C:\Users\zulki\Laravel\ecommerce_msr\resources\views/products/index.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row-mt-4">
          <div class="col-md-4 offset-md-8">
              <div class="form-group">
                  <select id="order_field" class="form-control">
                      <option value="" disabled selected>Urutkan</option>
                      <option value="best_seller">Best Seller</option>
                      <option value="terbaik">Terbaik</option>
                      <option value="termurah">Termurah</option>
                      <option value="termahal">Termahal</option>
                      <option value="terbaru">Terbaru</option>
                  </select>
              </div>
          </div>
        </div>
        <div id="product-list">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($idx == 0 | $idx % 4 == 0): ?>
            <div class="row mt-4">
              <?php endif; ?>

              <div class="col-md-3">
                <div class="card">
                  <?php if(!empty($product)): ?>
                  <img src="<?php echo e(url('/image_files/'.$product->image_url)); ?>" class="card-img-top" alt="" >
                  <?php endif; ?>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a href="<?php echo e(route('products.show', ['id' => $product->id])); ?>">
                        <?php echo e($product->name); ?>

                      </a>
                    </h5>
                    <p class="card-text">
                      <?php echo e($product->price); ?>

                    </p>
                    <a href="<?php echo e(route('carts.add',['id' => $product->id])); ?>" class="btn btn-primary">Beli</a>
                  </div>
                </div>

              </div>
              <?php if($idx > 0 && $idx %4 ==3): ?>
            </div>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#order_field').change(function(){
        // window.location.href='/?order_by' + $(this).val();
        $.ajax({
            type:'GET',
            url:'/products',
            data:{
                order_by: $(this).val(),
            },
            dataType:'json',
            success:function(data){
                var products ='';
                $.each(data,function(idx,product){
                    if(idx == 0 || idx % 4 == 0){
                        products += '<div class="row mt-4">';
                    }
                    products += '<div class="col">'+
                    '<div class="card">'+'<img src="/image_files/'+ product.image_url+'" class="card-img-top" alt="...">'+
                    '<div class="card-body">'+
                        '<h5 class="card-title">'+
                            '<a href="/products/'+product.id+'">'+
                            product.name+
                            '</a>'+
                        '</h5>'+
                        '<p class="card-text">'+
                        product.price+
                        '</p>'+
                        '<a href="/carts/add'+product.id+'" class="btn btn-primary">Beli</a>'+
                    '</div>'+
                '</div>'+
            '</div>';
            if(idx > 0 && idx % 4 == 3){
                products += '</div>';
                }
            });
        // update element
        $('#product-list').html(products);
            },
            error:function(data){
                alert('Unable to handle request');
            }
        });
    });
});
</script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>