<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Employee</h2>

        <!-- Form untuk update employee -->
        <form action="<?php echo e(route('employees.update', $employee->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- First Name -->
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input
                    type="text"
                    name="firstName"
                    id="firstName"
                    class="form-control"
                    value="<?php echo e(old('firstName', $employee->firstname)); ?>"
                    required>
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input
                    type="text"
                    name="lastName"
                    id="lastName"
                    class="form-control"
                    value="<?php echo e(old('lastName', $employee->lastname)); ?>"
                    required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    value="<?php echo e(old('email', $employee->email)); ?>"
                    required>
            </div>

            <!-- Age -->
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input
                    type="number"
                    name="age"
                    id="age"
                    class="form-control"
                    value="<?php echo e(old('age', $employee->age)); ?>"
                    required>
            </div>

            <!-- Position -->
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select name="position" id="position" class="form-control" required>
                    <option value="">-- Select Position --</option>
                    <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                            value="<?php echo e($position->id); ?>"
                            <?php echo e($employee->position_id == $position->id ? 'selected' : ''); ?>>
                            <?php echo e($position->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PAW 13\resources\views/employee/edit.blade.php ENDPATH**/ ?>