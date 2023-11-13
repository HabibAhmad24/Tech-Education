<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Dashboard</a>

            <div class="card">
                <div class="card-header"><?php echo e(__('Edit Existing Post')); ?></div>

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


                    <form action="/home/<?php echo e($post->id); ?>/update" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group">
                            <label for="" >Title</label>
                            <input type="text" name="title" id="" class="form-control" value="<?php echo e(old('title',$post->title)); ?>">
                             <?php if($errors->has('title')): ?>
                             <span class="text-danger"><?php echo e($errors->first('title')); ?></span>
                                 
                             <?php endif; ?>
                             <br>
                            <label for="" >Description</label>
                            <textarea class="form-control" name="description" rows="4" ><?php echo e(old('description',$post->description)); ?></textarea>
                            
                            <?php if($errors->has('description')): ?>
                            <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                                
                            <?php endif; ?>
                            <br>
                            <label for="" style="color: white">Category</label>
                              <br>
                              <div class="dropdown" style="color: white">
                              <select class="form-select" aria-label="Default select example" name="category" value= "<?php echo e(old('categories',$post->categories)); ?>">
                                
                                <option selected>Select Category</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Android Development">Android Development</option>
                                <option value="App Development">Data Science</option>
                                <option value="MERN Development">MERN Development</option>
                                <option value="PHP/Laravel Development">PHP/Laravel Development</option>
                                <option value="My SQL">My SQL</option>
                                <option value="Python Development">Python Development</option>

                                
                              </select>
                            </div>
                            <?php if($errors->has('Category')): ?>
                            <span class="text-danger"><?php echo e($errors->first('Category')); ?></span>
                                
                            <?php endif; ?>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" value="<?php echo e(old('image',$post->image)); ?>"/>
                            <?php if($errors->has('image')): ?>
                            <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                                
                            <?php endif; ?>
                            <br>
                            <div class="text-center">
                            <input type="submit" value="Submit" name="btn_submit" class="btn btn-success">
                            <input type="reset" value="Reset"  class="btn btn-danger">
                            <a href="/home" class="btn btn-secondary">Cancel</a>
                        </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/edit.blade.php ENDPATH**/ ?>