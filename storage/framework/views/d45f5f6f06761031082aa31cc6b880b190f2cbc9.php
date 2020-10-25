<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title', app_name()); ?></title>
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/font/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/icon/css/ionicons.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/dist/css/skins/_all-skins.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/plugins/iCheck/flat/blue.css')); ?>">
    <!-- Morris chart -->
    <?php /*<link rel="stylesheet" href="<?php echo e(asset('admin2/plugins/morris/morris.css')); ?>">*/ ?>
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/plugins/datepicker/datepicker3.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('admin2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('admin2/jquery-ui/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  <!--  <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>-->
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    
    
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<?php /*<link rel="stylesheet" href="<?php echo e(asset('admin2/datatables/media/css/jquery.dataTables.min.css')); ?>">*/ ?>
<style>
    .custom-table-padding{
        padding: 10px;
    }
    .btn-danger, .btn-warning{
       background-color: #3c8dbc;
       border-color: #367fa9;
    }
    .btn-danger:hover, .btn-warning:hover{
       background-color: #3c8dbc;
       border-color: #367fa9;
    }
    .tooltip.top .tooltip-inner {
     background-color:#167ab1;
    }
    .tooltip.top .tooltip-arrow {
     border-top-color: #167ab1;
    }
    
</style>

</head>
<body class="hold-transition skin-blue sidebar-mini" oncontextmenu="return false;" oncopy="return false;">
<div class="wrapper">
<?php echo $__env->make('admin2.header.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin2.sidebar.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php $__env->startSection('content'); ?>
            <?php echo $__env->yieldSection(); ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <strong>Designed & Developed By: <a href="https://www.infotech4it.com/" title="Infotech4it | Web Design Development and Digital Marketing Agency" style="color: #000; font-weight: 600;text-decoration:none" target="_blank">Infotech4it</a></strong>
                    </div>
        <strong>Copyright &copy; 2020 <a href="<?php echo e(url('dashboard')); ?>"><?php echo e(app_name()); ?></a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
           <!-- <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>-->
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be ok</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo </h4>

                                <p>New no</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora </h4>

                                <p>ok@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron </h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php /*<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>*/ ?>
<script src="<?php echo e(asset('admin2/plugins/jQuery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<?php /*<!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->*/ ?>
<script src="<?php echo e(asset('admin2/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo e(asset('admin2/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<?php /*<script src="<?php echo e(asset('admin2/plugins/morris/morris.min.js')); ?>"></script>*/ ?>
<!-- Sparkline -->
<script src="<?php echo e(asset('admin2/plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo e(asset('admin2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('admin2/plugins/knob/jquery.knob.js')); ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo e(asset('admin2/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- datepicker -->
<script src="<?php echo e(asset('admin2/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(asset('admin2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo e(asset('admin2/plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('admin2/plugins/fastclick/fastclick.js')); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin2/dist/js/app.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php /*<script src="<?php echo e(asset('admin2/dist/js/pages/dashboard.js')); ?>"></script>*/ ?>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('admin2/dist/js/demo.js')); ?>"></script>
<?php /*<script src="<?php echo e(asset('admin2/datatables/media/js/jquery.dataTables.js')); ?>"></script>*/ ?>

<?php /*<script src='https://vjs.zencdn.net/7.4.1/video.js'></script>*/ ?>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>

<script>


    jQuery(document).ready(function() {

        jQuery('#myTable').DataTable();
        CKEDITOR.replace( 'details' );


        <?php /*$('#subject_id').attr("disabled", true);*/ ?>
        <?php /*$('#chapter_id').attr("disabled", true);*/ ?>

        <?php /*$( "#class_id" ).change(function() {*/ ?>
            <?php /*var val=$("#class_id").val();*/ ?>
            <?php /*$('#subject_id').attr("disabled", false);*/ ?>
            <?php /*$.get("<?php echo e(route('admin.subjects.subjects_byclass')); ?>?id="+val, function( data ) {*/ ?>
                <?php /*$( "#subject_id" ).html( data );*/ ?>
            <?php /*});*/ ?>
        <?php /*});*/ ?>
        <?php /*$( "#subject_id" ).change(function() {*/ ?>
            <?php /*var val=$("#subject_id").val();*/ ?>
            <?php /*$('#chapter_id').attr("disabled", false);*/ ?>
            <?php /*$.get("<?php echo e(route('admin.subjects.chapter_bysubject')); ?>?id="+val, function( data ) {*/ ?>
                <?php /*$( "#chapter_id" ).html( data );*/ ?>
            <?php /*});*/ ?>
        <?php /*});*/ ?>



    });
</script>

<?php echo $__env->yieldContent('course_scripts'); ?>
</body>
</html>
