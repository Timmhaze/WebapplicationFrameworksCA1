<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Visit Details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td rowspan="6"></td>
                            </tr>
                            <tr>
                                <td>Doctor ID</td>
                                <td><?php echo e($visit->doctorId); ?></td>
                            </tr>
                            <tr>
                                <td>Patient ID</td>
                                <td><?php echo e($visit->patientId); ?></td>
                            </tr>
                            <tr>
                                <td>Visit Date</td>
                                <td><?php echo e($visit->visitDate); ?></td>
                            </tr>
                            <tr>
                                <td>Visit Time</td>
                                <td><?php echo e($visit->visitTime); ?></td>
                            </tr>
                            <tr>
                                <td>Visit Cost</td>
                                <td><?php echo e($visit->visitCost); ?></td>
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