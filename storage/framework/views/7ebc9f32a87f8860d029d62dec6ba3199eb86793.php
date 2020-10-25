<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="<?php echo e(csrf_token()); ?>" />

        <title><?php echo $__env->yieldContent('title', app_name()); ?></title>

        <!-- Meta -->
        <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Default Description'); ?>">
        
        <?php echo $__env->yieldContent('meta'); ?>

        <!-- Styles -->
        <?php echo $__env->yieldContent('before-styles-end'); ?>

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        <?php if (session()->has('lang-rtl')): ?>
            <?php echo e(Html::style(elixir('css/backend-rtl.css'))); ?>

            <?php echo e(Html::style(elixir('css/rtl.css'))); ?>

        <?php else: ?>
            <?php echo e(Html::style(elixir('css/backend.css'))); ?>

        <?php endif; ?>

        <?php echo $__env->yieldContent('after-styles-end'); ?>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <?php echo e(HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')); ?>

        <?php echo e(HTML::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')); ?>

        <![endif]-->


        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/AdminLTE.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/skins/_all-skins.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <?php echo $__env->yieldContent('css'); ?>
        <?php echo e(HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js')); ?>

        <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
        <link rel="stylesheet" href="<?php echo e(asset('datatables/media/css/jquery.dataTables.min.css')); ?>">
        <script src="<?php echo e(asset('datatables/media/js/jquery.dataTables.min.js')); ?>"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <?php echo $__env->yieldContent('after-styles'); ?>


    </head>
    <body class="skin-<?php echo e(config('backend.theme')); ?> <?php echo e(config('backend.layout')); ?>">
        <?php echo $__env->make('includes.partials.logged-in-as', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="wrapper">
            <?php echo $__env->make('backend.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('backend.includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <?php echo $__env->yieldContent('page-header'); ?>

                    <?php /* Change to Breadcrumbs::render() if you want it to error to remind you to create the breadcrumbs for the given route */ ?>
                    <?php echo Breadcrumbs::renderIfExists(); ?>

                </section>

                <!-- Main content -->
                <section class="content">
                    <?php echo $__env->make('includes.partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <?php echo $__env->make('backend.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div><!-- ./wrapper -->

        <!-- JavaScripts -->
        <?php /*<?php echo e(HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js')); ?>*/ ?>


        <?php echo e(Html::script('js/vendor/bootstrap/bootstrap.min.js')); ?>


        <?php echo $__env->yieldContent('before-scripts-end'); ?>
        <?php echo e(HTML::script(elixir('js/backend.js'))); ?>

        <?php echo $__env->yieldContent('after-scripts-end'); ?>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

        <!-- AdminLTE App -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/js/app.min.js"></script>

        <?php echo $__env->yieldContent('scripts'); ?>



        <?php /*<script>*/ ?>
            <?php /*jQuery(document).ready(function() {*/ ?>
               <?php /*//$('#myTable').dataTables();*/ ?>

                <?php /*$( "#purchase_date" ).datepicker();*/ ?>
                <?php /*$( "#sale_date" ).datepicker();*/ ?>



                <?php /*// Sale Creation Script*/ ?>
                <?php /*$("#discount").change(function () {*/ ?>
                <?php /*var noOfItems = $("#no_of_items").val();*/ ?>
                <?php /*var salePrice = $("#sale_price").val();*/ ?>
                <?php /*var discount = $("#discount").val();*/ ?>
                <?php /*var totalSaleAmountTemp = 0;*/ ?>
                <?php /*var totalSaleAmountWithDiscount = 0;*/ ?>
                <?php /*var totalSaleAmount = 0;*/ ?>
                <?php /*var remainingAmount = 0;*/ ?>
                <?php /*if(noOfItems != 0){*/ ?>
                    <?php /*totalSaleAmountTemp = noOfItems * salePrice;*/ ?>
                <?php /*}else {*/ ?>
                    <?php /*totalSaleAmountTemp = salePrice;*/ ?>
                <?php /*}*/ ?>
                <?php /*if(discount != 0){*/ ?>
                    <?php /*totalSaleAmountWithDiscount = (totalSaleAmountTemp / 100) * discount;*/ ?>
                    <?php /*totalSaleAmount = totalSaleAmountTemp - totalSaleAmountWithDiscount;*/ ?>
                <?php /*}else {*/ ?>
                   <?php /*// var totalSaleAmountWithDiscount = (totalSaleAmountTemp / 100) * 1;*/ ?>
                    <?php /*totalSaleAmount = totalSaleAmountTemp;*/ ?>
                <?php /*}*/ ?>
                <?php /*$("#totalSaleAmount").val(totalSaleAmount);*/ ?>
                <?php /*}); // Sale Creation Script Ends*/ ?>


            <?php /*});*/ ?>




                <?php /*jQuery.fn.extend({*/ ?>
                <?php /*treed: function (o) {*/ ?>

                    <?php /*var openedClass = 'glyphicon-minus-sign';*/ ?>
                    <?php /*var closedClass = 'glyphicon-plus-sign';*/ ?>

                    <?php /*if (typeof o != 'undefined'){*/ ?>
                        <?php /*if (typeof o.openedClass != 'undefined'){*/ ?>
                            <?php /*openedClass = o.openedClass;*/ ?>
                        <?php /*}*/ ?>
                        <?php /*if (typeof o.closedClass != 'undefined'){*/ ?>
                            <?php /*closedClass = o.closedClass;*/ ?>
                        <?php /*}*/ ?>
                    <?php /*};*/ ?>

                    <?php /*/* initialize each of the top levels */*/ ?>
                    <?php /*var tree = jQuery(this);*/ ?>
                    <?php /*tree.addClass("tree");*/ ?>
                    <?php /*tree.find('li').has("ul").each(function () {*/ ?>
                        <?php /*var branch = $(this);*/ ?>
                        <?php /*branch.prepend("");*/ ?>
                        <?php /*branch.addClass('branch');*/ ?>
                        <?php /*branch.on('click', function (e) {*/ ?>
                            <?php /*if (this == e.target) {*/ ?>
                                <?php /*var icon = jQuery(this).children('i:first');*/ ?>
                                <?php /*icon.toggleClass(openedClass + " " + closedClass);*/ ?>
                                <?php /*jQuery(this).children().children().toggle();*/ ?>
                            <?php /*}*/ ?>
                        <?php /*})*/ ?>
                        <?php /*branch.children().children().toggle();*/ ?>
                    <?php /*});*/ ?>
                    <?php /*/* fire event from the dynamically added icon */*/ ?>
                    <?php /*tree.find('.branch .indicator').each(function(){*/ ?>
                        <?php /*jQuery(this).on('click', function () {*/ ?>
                            <?php /*jQuery(this).closest('li').click();*/ ?>
                        <?php /*});*/ ?>
                    <?php /*});*/ ?>
                    <?php /*/* fire event to open branch if the li contains an anchor instead of text */*/ ?>
                    <?php /*tree.find('.branch>a').each(function () {*/ ?>
                        <?php /*jQuery(this).on('click', function (e) {*/ ?>
                            <?php /*jQuery(this).closest('li').click();*/ ?>
                            <?php /*e.preventDefault();*/ ?>
                        <?php /*});*/ ?>
                    <?php /*});*/ ?>
                    <?php /*/* fire event to open branch if the li contains a button instead of text */*/ ?>
                    <?php /*tree.find('.branch>button').each(function () {*/ ?>
                        <?php /*jQuery(this).on('click', function (e) {*/ ?>
                            <?php /*jQuery(this).closest('li').click();*/ ?>
                            <?php /*e.preventDefault();*/ ?>
                        <?php /*});*/ ?>
                    <?php /*});*/ ?>
                <?php /*}*/ ?>
            <?php /*});*/ ?>
            <?php /*/* Initialization of treeviews */*/ ?>
            <?php /*jQuery('#tree1').treed();*/ ?>





        <?php /*</script>*/ ?>




        <?php echo $__env->yieldContent('after-scripts'); ?>


    </body>
</html>