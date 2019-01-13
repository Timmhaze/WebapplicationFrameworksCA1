<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Visit Information</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('visits.store' )); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <table>
                            <tbody>
                                <tr>
                                    <select name="doctorId">
                                            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($doctor->id); ?>" <?php echo e((old('doctorId', $doctor->doctorId) == $doctor->id) ? "selected" : ""); ?> ><?php echo e($doctor->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    <td><?php echo e(($errors->has('doctorId')) ? $errors->first('doctorId') : ""); ?></td>
                                </tr>
                                <tr>
                                    <select name="patientId">
                                            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($patient->id); ?>" <?php echo e((old('patientId', $patient->patientId) == $patient->id) ? "selected" : ""); ?> ><?php echo e($patient->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <td><?php echo e(($errors->has('patientId')) ? $errors->first('patientId') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Visit Date</td>
                                    <td><input type="date" name="visitDate" value="<?php echo e(old('visitDate')); ?>" /></td>
                                    <td><?php echo e(($errors->has('email')) ? $errors->first('email') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Visit Time</td>
                                    <td><input type="time" name="visitTime" value="<?php echo e(old('visitTime')); ?>" /></td>
                                    <td><?php echo e(($errors->has('visitTime')) ? $errors->first('visitTime') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Visit Cost</td>
                                    <td><input type="text" name="visitCost" value="<?php echo e(old('visitCost')); ?>" /></td>
                                    <td><?php echo e(($errors->has('visitCost')) ? $errors->first('visitCost') : ""); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" value="store">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>