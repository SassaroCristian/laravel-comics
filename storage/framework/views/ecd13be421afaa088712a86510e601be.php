<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>


<body>
    <div class="bg-white">
        <div class="grid grid-cols-12 p-4">
            <div class="col-span-6 flex justify-center">
                <img src="<?php echo e(asset('images/dc-logo.png')); ?>" alt="" class="justify-center">
            </div>
            <div class="col-span-6 flex justify-center items-center text-black">
                <?php $__currentLoopData = $dati; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="p-5 text-xs hover-link font-bold" href="<?php echo e($link['href']); ?>"> <?php echo e($link['url']); ?> </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div class="bg-img"></div>
    <h1 class="series-tag">CURRENT SERIES</h1>
    <div class="p-20">
        <div class="w-8/12 m-auto flex flex-wrap justify-center">
            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-5">
                <div class="h-48 overflow-hidden">
                    <img class="w-48" src="<?php echo e($card['thumb']); ?>" alt="">
                </div>
                <p class="w-48 pt-5 text-xs"><?php echo e($card['series']); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="flex justify-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-5">
            <a href="#">SIGN UP NOW!</a>
        </button>
    </div>

    <div class="grid grid-cols-5 gap-4 bg-blue h-32 ">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex items-center justify-center col-span-1">
            <img class="w-10 h-10" :src="<?php echo e($item['src']); ?>" alt="">
            <p class="pl-4 text-xs"><?php echo e($item['text']); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class=" img-bg">
        <div class="m-auto w-9/12 flex h-96 overflow-hidden">
            <div class="w-screen img-bg">
                <div class="m-auto w-9/12 flex h-96 overflow-hidden">
                    <div class=" pt-10 pr-10 pb-10 flex flex-col justify-center">
                        <h1 class="font-bold">DC COMICS</h1>
                        <ul>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                        </ul>
                        <h1 class="pt-5 font-bold">SHOP</h1>
                        <ul>
                            <li>shop DC</li>
                            <li>shop DC Collectables</li>
                        </ul>
                    </div>

                    <div class=" pt-10 pr-10 flex flex-col ">

                        <h1 class="font-bold">DC</h1>
                        <ul>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                        </ul>
                    </div>

                    <div class="pt-10 flex flex-col ">
                        <h1 class="font-bold">SITES</h1>
                        <ul>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                            <li>shop DC</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="">
                <img id="dc-logo" class="pl-20" src="<?php echo e(asset('images/dc-logo-bg.png')); ?>" alt="">
            </div>
        </div>
    </div>
    <div class=" bg-gray-800 text-white py-4">
        <div class="m-auto w-9/12 flex justify-between items-center">
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <a href="#">SIGN UP NOW!</a>
                </button>
            </div>

            <div class="flex items-center space-x-4">
                <p>FOLLOW US </p>
                <img src="<?php echo e(asset('images/footer-facebook.png')); ?>" alt="Facebook">
                <img src="<?php echo e(asset('images/footer-twitter.png')); ?>" alt="Twitter">
                <img src="<?php echo e(asset('images/footer-youtube.png')); ?>" alt="YouTube">
                <img src="<?php echo e(asset('images/footer-pinterest.png')); ?>" alt="Pinterest">
                <img src="<?php echo e(asset('images/footer-periscope.png')); ?>" alt="Periscope">
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH /Users/childassbambino_/Desktop/Boolean/esercizi/Laravel-comics/laravel-comics/resources/views/home.blade.php ENDPATH**/ ?>