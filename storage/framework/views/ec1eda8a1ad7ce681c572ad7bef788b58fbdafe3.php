<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Book details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td rowspan="6"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><?php echo e($doctor->name); ?></td>
                            </tr>
                            <tr>
                                <td>Postal Address</td>
                                <td><?php echo e($doctor->postalAddress); ?></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><?php echo e($doctor->phoneNumber); ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo e($doctor->email); ?></td>
                            </tr>
                            <tr>
                                <td>Date Started</td>
                                <td><?php echo e($doctor->dateStarted); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>