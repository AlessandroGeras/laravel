

<div class="float-right mt-[-0.5px] mr-60 flex items-center h-14">

    <?php if(auth()->guard()->guest()): ?>
    <ul class="font-bold lg:flex">
        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200 hover:bg-white cursor-pointer" href="<?php echo e(route('login')); ?>">
        <i class="fa-solid fa-pizza-slice"></i> &nbsp; Fazer login</a></li>

        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200  hover:bg-white cursor-pointer" href="<?php echo e(route('create_user')); ?>">
        <i class="fa-solid fa-user-plus"></i> &nbsp; Criar conta</a></li>
    </ul>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
    <ul class="mt-[11.5px] font-bold lg:flex">
        <li><a class="p-[16px] text-3xl font-dancing  font-medium text-yellow-500 cursor-default" href="<?php echo e(route('create_user')); ?>">
        Olá, <?php echo e($user->name); ?></a></li>

        
        <?php if($user->permission->role=="admin"): ?>
        <?php if(Route::currentRouteName()=="index"): ?>
        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200  hover:bg-white cursor-pointer" href="<?php echo e(route('panel')); ?>">
        <i class="fa-solid fa-screwdriver-wrench"></i> &nbsp; Painel Administrativo</a></li>
        
        <?php else: ?>
        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200 hover:bg-white cursor-pointer" href="<?php echo e(route('index')); ?>">
        <i class="fa-solid fa-house"></i> &nbsp; Página Principal</a></li>
        <?php endif; ?>
        <?php endif; ?>

        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200  hover:bg-white cursor-pointer" href="<?php echo e(route('logoff')); ?>">
                <i class="fa-solid fa-door-open"></i> &nbsp; Logoff</a></li>
        <?php endif; ?>
    </ul>
</div>

</html><?php /**PATH /app/resources/views/components/navbar/navbar_menu.blade.php ENDPATH**/ ?>