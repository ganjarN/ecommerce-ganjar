<?php /* C:\Users\zulki\Laravel\ecommerce_msr\resources\views/admin/products/show.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Detail Barang</h2>
            <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-primary">Kembali</a></a>
            <hr>
                 <div class="table-responsive">
                    <table class="table table-stripped table-sm">
                        <thead>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Gambar Produk</th>
                            <th>Deskripsi Produk</th>
                        </thead>
                        <?php $no = 1 ?>
                        <tbody>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($products->name); ?></td>
                            <td>Rp. <?php echo e(number_format($products->price, 2)); ?></td>
                            <td>
                                    <img src="<?php echo e(url('image_files/'.$products->image_url)); ?>" class="img-thumbnail" width="300">
                          
                            </td>
                            <td><?php echo e(strip_tags($products->description)); ?></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>