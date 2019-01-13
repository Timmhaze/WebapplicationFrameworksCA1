<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Books (Admin view)</div>

                <div class="card-body">
                    <a href="<?php echo e(route( 'visits.create' )); ?>">Add</a>
                    <table>
                        <thead>
                            <tr>
                                <th>doctorId</th>
                                <th>patientId</th>
                                <th>visitDate</th>
                                <th>visitTime</th>
                                <th>visitCost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $visits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($visit->doctorId); ?></td>
                                <td><?php echo e($visit->patientId); ?></td>
                                <td><?php echo e($visit->visitDate); ?></td>
                                <td><?php echo e($visit->visitTime); ?></td>
                                <td><?php echo e($visit->visitCost); ?></td>
                                <td>
                                    <a href="<?php echo e(route('visits.show', $visit )); ?>">View</a>
                                    <a href="<?php echo e(route('visits.edit', $visit)); ?>">Edit</a>
                                    <form action="<?php echo e(route('visits.destroy', $visit)); ?>" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>