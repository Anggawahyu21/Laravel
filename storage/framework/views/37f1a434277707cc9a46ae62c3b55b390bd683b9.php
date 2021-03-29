<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="border-b p-3">
        <font size="5" class="font-bold pl-2"><?php echo e($title); ?></font>
  </div>
    <main>
        <div class="col-span-6 p-4">
            <a href="<?php echo e(route('dataguru.create')); ?>"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-300 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Tambah</button>
           </a>
            <a href="#"><button class="px-4 py-1 text-sm rounded bg-white text-blue-600 font-semibold border border-blue-300 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Konfirmasi</button>
            </a>
            <a href="#" target="_blank"><button class="px-4 py-1 text-sm rounded bg-red-600 text-white font-semibold border hover:text-red-600 hover:bg-white hover:border-red-300 focus:outline-none">Print to PDF</button>
            </a>
        </div>
    <div class="rounded sm:px-1 sm:px-1 sm:bg-gray-100">
        <table class="min-w-full divide-y">
        <thread class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pilih</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Profesi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Option</th>
            </tr>
        </thread>
        <tbody class="divide-y divide-gray-200">
            <?php $no=1; ?>
            <?php $__currentLoopData = $datguru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id=""></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($guru->nip); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($guru->nama); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        <?php echo e($guru->status); ?>

                    </td>
                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($guru->profesi); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap" >
                        <a href="<?php echo e(route('dataguru.edit',$guru->id)); ?>"><button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none"><i class="fas fa-edit pr-0 md:pr-3">&nbsp Edit</i></button></a>
                        
                    <form action="<?php echo e(route('dataguru.destroy',$guru->id)); ?>" method="POST" class="pt-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none"><i class="fas fa-trash pr-0 md:pr-3">&nbsp Hapus</i></button>
                    </form>
                    </td>
                </tr>
                <?php $no++;?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
     </div> 
    </main>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\blog-laravel\resources\views/admin/dataguru.blade.php ENDPATH**/ ?>