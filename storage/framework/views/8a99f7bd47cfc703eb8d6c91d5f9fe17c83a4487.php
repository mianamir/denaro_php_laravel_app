
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Galleries</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
               href="<?php echo route('admin.galleries.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="demo1">

                    <thead>

                    <tr>
<?php /*                        <th>Category</th>*/ ?>
                        <th>Name</th>
<?php /*                        <th>Image</th>*/ ?>
<?php /*                        <th>Image Order</th>*/ ?>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach($galleries as $gallery): ?>
                        <?php
//                        $category = \App\Models\Admin\HomeGallery::where('id',$gallery->cat_id)->first();


                        ?>
                        <tr>
<?php /*                            <td>*/ ?>
<?php /*                                <?php if($category != null): ?>*/ ?>
<?php /*                                    <?php echo $category->title; ?>*/ ?>
<?php /*                                <?php else: ?>*/ ?>
<?php /*                                    Not Available*/ ?>
<?php /*                                <?php endif; ?>*/ ?>
<?php /*                            </td>*/ ?>
<?php /*                            <td><?php echo $gallery->name; ?></td>*/ ?>
                            <td>
                                <iframe width="250" height="250" src="https://www.youtube.com/embed/<?php echo e($gallery->name); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </td>
<?php /*                            <td><img src="<?php echo e(asset($gallery->image)); ?>" width="200" height="70"></td>*/ ?>
<?php /*                            <td><?php echo $gallery->order_image; ?></td>*/ ?>
                            <td>
                                <?php echo Form::open(['route' => ['admin.galleries.destroy', $gallery->id], 'method' => 'delete']); ?>

                                <div class='btn-group'>
                                    <?php /*<a href="<?php echo route('admin.clients.show', [$client->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>*/ ?>
                                    <a href="<?php echo route('admin.galleries.edit', [$gallery->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                                </div>
                                <?php echo Form::close(); ?>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('postJquery'); ?>
    @parent

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>