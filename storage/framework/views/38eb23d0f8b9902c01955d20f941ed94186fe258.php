<?php $__env->startSection('css', 'css/serviceStyle.css'); ?>


<?php $__env->startSection('title', 'Service'); ?>


<?php $__env->startSection('header'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post" action="/update-product">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>


        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
        <h3>Modifier votre statuette</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nom de la création" value="<?php echo e($product->name); ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="date" class="form-control" placeholder="DD/MM/YY" value="<?php echo e($product->date); ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="origin" class="form-control" placeholder="Origine (pays)" value="<?php echo e($product->origin); ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="prix (euro)" value="<?php echo e($product->price); ?>" />
                </div>
                <div class="form-group">
                    <input type="text" name="artistname" class="form-control" placeholder="Auteur" value="<?php echo e($product->artistname); ?>" />
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btnContact"  value="Confirmer" />
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/update.blade.php ENDPATH**/ ?>