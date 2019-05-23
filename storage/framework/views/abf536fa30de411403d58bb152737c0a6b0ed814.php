<?php /* D:\0 - Zulkipli Bin Suhib\Project_ecommerce1\resources\views/products/show.blade.php */ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo e(url('/image_files/'.$product->image_url)); ?>" alt="..." class="card-img-top">
        </div>
        <div class="col-md-9">
            <h3>
                <?php echo e($product->name); ?>

            </h3>
            <h4>
               Rp. <?php echo e(number_format($product->price ,2)); ?>

       
            </h4>
            <!-- rating -->
            <?php for($i = 1; $i<=5; $i++): ?>
                <?php if($i <= $rating): ?>
                <span class="fa fa-star checked"></span>
                <?php else: ?>
                <span class="fa fa-star"></span>
                <?php endif; ?>
            <?php endfor; ?>

            <div class="mt-4">
                <a href="<?php echo e(route('carts.add', ['id' => $product['id']])); ?>" class="btn btn-primary">Beli</a>
            </div>
            
            <div class="mt-2">
                <a href="https:://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="_blank">
                    Share Facebook
                </a> |
                <a href="https:://www.twitter.com/intent/tweet?text=my share text&amp;url=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="_blank">
                    Share Twitter
                </a> |
                <a href="https:://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(route('products.show', ['id' => $product['id']])); ?>&amp;title=my share text&amp;summary=dit is de linedin summary" class="social-button" target="_blank">
                    Share Linkedin
                </a> |
                <a href="https:://www.wa.me/?text=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="_blank">
                    Share Whatsapp
                </a>
            </div>
            
            <div class="mt-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#description" class="nav-link active" role="tab" data-toggle="tab">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#review" class="nav-link" role="tab" data-toggle="tab">Review</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">
                    <div class="tab-pane fade in active show" id="description" role="tabpanel">
                        <?php echo $product->description; ?>

                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="review">
                        <form action="<?php echo e(route('products.store', ['id' => $product->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <label>Rating</label><br>
                                <!-- rating radio -->
                                <input type="radio" name="rating" value="1">1 <br> 
                                <input type="radio" name="rating" value="2">2 <br>
                                <input type="radio" name="rating" value="3">3 <br>
                                <input type="radio" name="rating" value="4">4 <br>
                                <input type="radio" name="rating" value="5">5 <br>
                                <div class="form-group">
                                <br/>
                                    <label>Komentar</label>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Deskripsi" id="ckview"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <div>
                        <h3>Semua Komentar</h3> <br/>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($review->user->name); ?>

                        : <label><?php echo $review->description; ?></label><br/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(url('plugins\tinymce\jquery.tinymce.min.js')); ?>"></script>
<script src="<?php echo e(url('plugins\tinymce\tinymce.min.js')); ?>"></script>
<style>
.checked {
  color: orange;
}
</style>
<!-- tinymce js -->
<script>
tinymce.init({ selector:'#ckview' });
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>