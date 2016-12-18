<?php $__env->startSection('content'); ?>

    <h1>Users</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        <?php if($users): ?>

            <?php foreach($users as $user): ?>

        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->role_id); ?></td>
            <td><?php echo e($user->is_active == 1 ? 'Active' : 'Not Active'); ?></td>
            <td><?php echo e($user->created_at->diffForHumans()); ?></td>
            <td><?php echo e($user->updated_at->diffForHumans()); ?></td>
        </tr>

            <?php endforeach; ?>

         <?php endif; ?>

        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>