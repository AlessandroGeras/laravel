

<div class="mt-20 w-full max-w-xs mx-auto">
  <form class="bg-gray-50 shadow-md rounded px-8 pt-4 pb-4 mb-4" method="POST" action="<?php echo e(route('auth')); ?>">
    <?php echo csrf_field(); ?>

    <label class="block text-yellow-500 text-lg font-bold mb-4 text-center">
      Login
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

    <?php if(session('auth')): ?>
    <div class="text-white bg-red-500 text-sm font-bold mb-4 text-center">
      <?php echo session('auth'); ?>

    </div>
    <?php endif; ?>

    <label class="block text-gray-700 text-sm font-bold mb-2">
      Email
    </label>

    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text">

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Senha
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password">

    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Login
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="<?php echo e(route('forget_password')); ?>">
        Esqueceu a senha?
      </a>
    </div>
  </form>
</div><?php /**PATH /app/resources/views/components/auth/login.blade.php ENDPATH**/ ?>