<?php $__env->startSection('css', 'css/serviceStyle.css'); ?>


<?php $__env->startSection('title', 'Service'); ?>


<?php $__env->startSection('header'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post" action="/add-products">
        <?php echo csrf_field(); ?>
        <h3>Vendez votre statuette</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nom de la création" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="date" class="form-control" placeholder="DD/MM/YY" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="origin" class="form-control" placeholder="Origine (pays)" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="prix (dollars)" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="artistname" class="form-control" placeholder="Auteur" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btnContact"  value="Vendre" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/service.blade.php ENDPATH**/ ?>