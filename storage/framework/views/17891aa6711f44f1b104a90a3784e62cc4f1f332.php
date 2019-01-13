<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Doctors</div>

                <div class="card-body">
                    <a href="<?php echo e(route( 'doctors.create' )); ?>">Add</a>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Postal Address</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Date Started</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($doctor->name); ?></td>
                                <td><?php echo e($doctor->postalAddress); ?></td>
                                <td><?php echo e($doctor->phoneNumber); ?></td>
                                <td><?php echo e($doctor->email); ?></td>
                                <td><?php echo e($doctor->dateStarted); ?></td>
                                <td>
                                    <a href="<?php echo e(route('doctors.show', $doctor )); ?>">View</a>
                                    <a href="<?php echo e(route('doctors.edit', $doctor)); ?>">Edit</a>
                                    <form action="<?php echo e(route('doctors.destroy', $doctor)); ?>" method="POST">
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