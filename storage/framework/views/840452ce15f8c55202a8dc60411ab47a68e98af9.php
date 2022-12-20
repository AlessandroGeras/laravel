

<div class="mt-20 w-full max-w-xs mx-auto">
  <form class="bg-gray-50 shadow-md rounded px-8 pt-4 pb-4 mb-4" method="POST" action="<?php echo e(route('store_user')); ?>">
    <?php echo csrf_field(); ?>

    <label class="block text-yellow-500 text-lg font-bold mb-4 text-center">
        Criar Conta
    </label>

    <?php if($errors->any()): ?>
    <div class="bg-red-500">
      <div class="text-white text-sm font-bold mb-4 text-center">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($error); ?><br />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <?php endif; ?>

    <label class="block text-gray-700 text-sm font-bold mb-2">
        Nome
    </label>

    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text">

    <label class="block text-gray-700 text-sm font-bold mb-2">
        Email
    </label>

    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text">
    <div class="mb-6">

    <label class="mt-4 block text-gray-700 text-sm font-bold mb-2">
        Senha<br>
        <div class="text-[10px]">        
        Minímo 8 caracteres<br>
        1 letra maíuscula<br>
        1 caracter especial
        </div>
    </label>

    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password">

    <label class="block text-gray-700 text-sm font-bold mb-2">
        Confirmar Senha
    </label>

    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password">    
    </div>
    
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-auto" type="submit">
        Criar Conta
      </button>
    </div>
  </form>  
</div><?php /**PATH /app/resources/views/components/auth/create_user.blade.php ENDPATH**/ ?>