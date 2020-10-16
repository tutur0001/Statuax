<?php $__env->startSection('css', 'css/statuetteStyle.css'); ?>

<?php $__env->startSection('title', 'statuette'); ?>


<?php $__env->startSection('header'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    	<div class="col-md-12">

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail" >
					<img src="img/téléchargement.jpeg" class="img-responsive">
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6">
                                <h3><?php echo e($product->name); ?></h3>
							</div>
							<div class="col-md-6 col-xs-6 price">
								<h3><label>$<?php echo e($product->price); ?></label></h3>
							</div>
						</div>
						<p>création: <?php echo e($product->date); ?><br>Origine: <?php echo e($product->origin); ?><br>Artiste: <?php echo e($product->artistname); ?></p>
						<div class="row">
							<div class="col-md-6">
                                <form action="/edit" method="post">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                    <input type="submit" class="btn btn-primary btn-product" value="Modifier">
                                </form> 
							</div>
							<div class="col-md-6">
                                <form action="/delete" method="post">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                    <input type="submit" class="btn btn-success btn-product" value="Supprimer">
                                </form>
                            </div>
						</div>

						<p> </p>
					</div>
				</div>
            </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div> 

	</div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/statuette.blade.php ENDPATH**/ ?>