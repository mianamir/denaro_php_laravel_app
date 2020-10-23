<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="<?php echo e(csrf_token()); ?>" />

        <title><?php echo $__env->yieldContent('title', app_name()); ?></title>

        <!-- Meta -->
        <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Adnan'); ?>">
        <meta name="author" content="<?php echo $__env->yieldContent('meta_author', 'Adnan Mumtaz Mayo'); ?>">
        <?php echo $__env->yieldContent('meta'); ?>

        <!-- Styles -->
        <?php echo $__env->yieldContent('before-styles-end'); ?>

        <?php echo e(Html::style(elixir('css/frontend.css'))); ?>


        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <?php if (session()->has('lang-rtl')): ?>
            <?php echo Html::style(elixir('css/rtl.css')); ?>

        <?php endif; ?>

        <?php echo $__env->yieldContent('after-styles-end'); ?>

        <!-- Fonts -->
        <?php echo e(Html::style('https://fonts.googleapis.com/css?family=Lato:100,300,400,700')); ?>

    </head>
    <body id="app-layout">
        <?php echo $__env->make('includes.partials.logged-in-as', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('frontend.includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container">
            <?php echo $__env->make('includes.partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div><!-- container -->

        <!-- Scripts -->
        <?php echo e(HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js')); ?>

        <script>window.jQuery || document.write('<script src="<?php echo e(asset('js/vendor/jquery/jquery-2.1.4.min.js')); ?>"><\/script>')</script>
        <?php echo Html::script('js/vendor/bootstrap/bootstrap.min.js'); ?>


        <?php echo $__env->yieldContent('before-scripts-end'); ?>
        <?php echo Html::script(elixir('js/frontend.js')); ?>

        <?php echo $__env->yieldContent('after-scripts-end'); ?>

        <?php echo $__env->make('includes.partials.ga', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>