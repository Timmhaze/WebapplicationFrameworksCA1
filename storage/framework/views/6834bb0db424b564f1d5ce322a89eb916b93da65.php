<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create New Patient</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('patients.store' )); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" value="<?php echo e(old('name')); ?>" /></td>
                                    <td><?php echo e(($errors->has('name')) ? $errors->first('name') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Postal Address</td>
                                    <td><input type="text" name="postalAddress" value="<?php echo e(old('postalAddress')); ?>" /></td>
                                    <td><?php echo e(($errors->has('postalAddress')) ? $errors->first('postalAddress') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" name="phoneNumber" value="<?php echo e(old('phoneNumber')); ?>" /></td>
                                    <td><?php echo e(($errors->has('phoneNumber')) ? $errors->first('phoneNumber') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" value="<?php echo e(old('email')); ?>" /></td>
                                    <td><?php echo e(($errors->has('email')) ? $errors->first('email') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Medical Insurance?</td>
                                    <td><input type="text" name="medicalInsurance" value="<?php echo e(old('medicalInsurance')); ?>" /></td>
                                    <td><?php echo e(($errors->has('dateStarted')) ? $errors->first('dateStarted') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Insurance Number</td>
                                    <td><input type="text" name="insuranceNumber" value="<?php echo e(old('insuranceNumber')); ?>" /></td>
                                    <td><?php echo e(($errors->has('dateStarted')) ? $errors->first('dateStarted') : ""); ?></td>
                                </tr>
                                <tr>
                                    <td>Policy Number</td>
                                    <td><input type="text" name="policyNumber" value="<?php echo e(old('policyNumber')); ?>" /></td>
                                    <td><?php echo e(($errors->has('dateStarted')) ? $errors->first('dateStarted') : ""); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" value="Store">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>