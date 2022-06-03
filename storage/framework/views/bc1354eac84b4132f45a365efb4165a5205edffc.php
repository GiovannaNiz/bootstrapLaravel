<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap no Laravel</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
        <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
    </head>
    <body>
        <h1>Utilizando Bootstrap</h1>
        <button class="btn btn-lg btn-success">Bootstrap</button>
    </body>
</html><?php /**PATH C:\xampp\htdocs\bootstrapLaravel\resources\views/welcome.blade.php ENDPATH**/ ?>