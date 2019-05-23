<?php /* C:\Users\zulki\Laravel\Project_Zulkipli\resources\views/admin/products/index.blade.php */ ?>
  
  <?php $__env->startSection('content'); ?>
  
  
    <div class="container">
    <h4 class="">List Product Users</h1>
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
                      <a href="<?php echo e(route('admin.products.show', ['id' => $product->id])); ?>">
                        <?php echo e($product->name); ?>

                      </a>
                    </h5>
                    <p class="card-text">
                     Rp. <?php echo e(number_format($product->price, 2)); ?>

                    </p>
                    <td>
                        
                          <form action="<?php echo e(route('admin.products.destroy',$product->id)); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('Delete'); ?>
                              <a href="<?php echo e(route('admin.products.edit',$product->id)); ?>" class="btn btn-primary">Edit</a>
                              <button class="btn btn-warning" onclick="return confirm('Yakin Mau di Hapus ?')" type="submit">Delete</button>
                          </form>
                      </td>
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
            url:'/admin/products',
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
                        '<td>'+
                        
                          '<form action="/admin/products/destroy'+product.id+'" method="post">'+
                              '<?php echo csrf_field(); ?>'+
                              '<?php echo method_field('Delete'); ?>'+
                              '<a href="/admin/products/edit'+product.id+'" class="btn btn-primary">Edit</a>'+ 
                              '<button class="btn btn-warning" onclick="return confirm'+('Yakin Mau di Hapus ?')+' type="submit">Delete</button>'+
                          '</form>'+
                      '</td>'+
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