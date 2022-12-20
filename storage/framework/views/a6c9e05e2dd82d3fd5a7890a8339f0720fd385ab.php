

<div class="mt-20 mb-10 ml-60">

    
    <div class="text-2xl text-yellow-500 underline">Pizzas Salgadas</div>
    <div class="mt-6 grid grid-cols-4 gap-x-4 gap-y-8">

        <?php if(isset($pizzas)): ?>
        <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($pizza->category=="salgada"): ?>

        <div><img class="z-10 relative rounded-full border-4 border-yellow-500" src="<?php echo e($pizza->image_url); ?>">
            <div class="mt-[-15px] relative h-60 w-[240px] bg-rose-100 rounded">
                <div class="text-lg font-medium relative top-5 left-5"><?php echo e($pizza->name); ?></div>
                <div class="text-sm relative top-10 left-5 pr-10"><?php echo e($pizza->description); ?></div>
                <br>
                <div class="text-sm absolute bottom-4 left-1/4 bg-green-700 hover:bg-green-500 text-white w-1/2 text-center pr-2 rounded cursor-pointer">
                    <div> <i class="fa-solid fa-cart-shopping p-2"></i>
                        <?php
                        echo number_format((float)$pizza->price, 2, ',', '');
                        ?></div>
                </div>
            </div>
        </div>

        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
    

    
    <?php echo e($slot); ?>

    

</div><?php /**PATH C:\Users\Cleia Geras\Downloads\DeliveryPlusDocker\Delivery\resources\views/components/pizzas/pizzas_salgadas.blade.php ENDPATH**/ ?>