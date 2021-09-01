
<?php $__env->startSection('content'); ?>
<?php
    $title = 'Demo Version';
  

?>
<style>
.card{
    min-height:450px;
    margin-top: 0px;
}
</style>
<section class="rightside-main">
    <div class="container-fluid">
        <div class="page-top">
            <div class="page-header borderless">
                <h4><?php echo $title; ?></h4>   
            </div>
            <div class="page-berdcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <!-- <li class="breadcrumb-item">
                        <a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                    </li> -->
                    <li class="breadcrumb-item">
                        <a href="#"><?php echo e($title); ?></a>
                    </li>
                </ul>       
            </div>
        </div>
        <div class="row">
  
            <div class="col-md-12 pl-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card table-card">
                            <div class="card-header borderless">
                                <h3><?php echo $title;?></h3>
                            </div>
                            <div class="card-body">
                                <h6>This Feature Is Not Available For Demo Version.</h6>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Wamp\www\LeukeWebPanel\resources\views/admin/admin-app-version-warning.blade.php ENDPATH**/ ?>