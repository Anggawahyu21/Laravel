<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1">
    <font size="6" class="font-bold pl-2"><?php echo e($title); ?></font>
    <main>
  <div class="py-1 md:py-3 md:pl-3 pl-1 bg-red-400 md:text-white ">
    <p>
      Anda Login sebagai Admin
    </p>
    <p>
      Silahkan wajib upload data dibawah ini!
    </p>
    <p>
      1. Data Guru
    </p>
       <p>
      2. Data Siswa
    </p>
    <p>
      3. Data Informasi
    </p>
  </div>
    </main>
  </div>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\blog-laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>