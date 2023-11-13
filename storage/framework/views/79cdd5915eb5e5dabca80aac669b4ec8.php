<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><?php echo e(__('Your Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block">
                      <strong><?php echo e($message); ?></strong>
                    </div>
                    <?php endif; ?>
                    <a href="<?php echo e(url('/home/create')); ?>" class="btn btn-primary">Create New Post</a>
                    

                    <h2 class="text-center">Your Posts</h2>

                    <table id="post" style="text-align: center">
                        <tr style="align-items: center">
                          <th style="text-align: center">Title</th>
                          <th style="text-align: center">Description</th>
                          <th style="text-align: center">Post Category</th>
                          <th style="text-align: center">Images</th>
                          <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <tr>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->description); ?></td>
                            <td>
                                <?php if(empty($post->categories)): ?>
                                    No category Selected
                                <?php else: ?>
                                
                                    <?php echo e($post->categories); ?> 
                                <?php endif; ?>
                            </td>
                            <td><img src="post/<?php echo e($post->image); ?>" alt="Loading" class="rounded-circle" width="50" height="50" style="border-radius: 20px"></td>
                            
                            <td><a href="home/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a></td>
                            <td><a href="home/<?php echo e($post->id); ?>/delete" class="btn btn-danger" onclick="return confirm('<?php echo e(__('Are you sure you want to delete?')); ?>')">
                                
                                
                                    <?php echo e(__('Delete')); ?>

                            </a></td>
                            
                            
                        </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                    



                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Educationwebsite/resources/views/home.blade.php ENDPATH**/ ?>