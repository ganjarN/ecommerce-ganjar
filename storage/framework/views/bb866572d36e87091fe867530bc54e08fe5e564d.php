<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce/resources/views/image_insert.blade.php */ ?>
  <?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h2>Tambah Gambar</h2>
          <br>
          <form action="<?php echo e(route('image_save')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


            <div class="form-group">
              <label>Image Title</label>
              <input type="text" name="image_title" class="form-control">
            </div>

            <div class="form-group">
              <label>Image Desc</label>
              <textarea name="image_desc" class="form-control" id="ckview" rows="8" cols="80"></textarea>
            </div>

            <div class="form-group">
              <label>Upload</label>
              <input type="file" name="image_src" class="form-control">
            </div>

            <div class="form-control">
                <button type="submit" class="btn btn-primary" name="button">Save Image</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>

<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/jquery.tinymce.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url ('plugins/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript">tinymce.init({ selector:'#ckview'})</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>