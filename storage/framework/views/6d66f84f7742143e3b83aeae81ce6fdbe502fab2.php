<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/products/show.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="<?php echo e(url('/image_files/'.$product->image_url)); ?>" class="card-img-top" alt="">
        </div>

        <div class="col-md-9">
          <div class="">
            <h3>
              <?php echo e($product->name); ?>

            </h3>
            <?php $rating = 2.1; ?>
            <p>
              <div class="placeholder" style="color:lightgray">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span class="small"><?php echo e($rating); ?></span>
              </div>

              <div class="overlay" style="position: relative; top: -22px; color: yellow;">
                <?php while($rating>0): ?>
                  <?php if($rating > 0.5): ?>
                    <i class="fas fa-star"></i>
                  <?php else: ?>
                    <i class="fas fa-star-half"></i>
                  <?php endif; ?>
                    <?php $rating--; ?>
                <?php endwhile; ?>
              </div>
            </p>
          </div>
          <h4>
            <?php echo e($product->price); ?>

          </h4>
          <div class="mt-4">
            <a href="<?php echo e(route('carts.add', ['id'=> $product['id']])); ?>" class="btn btn-primary">Beli</a>
          </div>

          <div class="mt-2">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('products.show', ['id'=> $product['id']])); ?>" class="social-button" target="_blank">
              Share Facebook
            </a>
            |
            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="_blank">
              Share Twitter
            </a>
            |
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(route('products.show', ['id' => $product['id']])); ?>&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button" target="_blank">
              Share Linkedin
            </a>
            |
            <a href="https://wa.me/?text=<?php echo e(route('products.show', ['id' => $product['id']])); ?>" class="social-button" target="_blank">
              Share WhatsApp
            </a>
          </div>

          <div class="mt-4">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#description" role="tab" data-toggle="tab">Description</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#review" role="tab" data-toggle="tab">Review</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content mt-2">
              <div role="tabpanel" class="tab-pane fade in active show" id="description">
                <?php echo $product->description; ?>

              </div>
              <div role="tabpanel" class="tab-pane fade" id="review">
                <h5>Rating</h5>
                <form class="" action="index.html" method="post">

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">3</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                    <label class="form-check-label" for="inlineRadio4">4</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                    <label class="form-check-label" for="inlineRadio5">5</label>
                  </div><br><br>

                  <div class="form-group">
                    <label> <h5>Comments</h5> </label>
                    <textarea type="textarea" name="description" class="form-control" id="ckview" rows="3" placeholder="Deskripsi" novalidate></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="button">Kirim</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  <?php $__env->stopSection(); ?>

<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/jquery.tinymce.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript">tinymce.init({ selector:'#ckview'})</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>