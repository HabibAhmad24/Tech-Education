<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categories</title>
    <link rel="stylesheet" href="assest/style.css">
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>


</head>
<body>

    
    <nav>
        <img src="assest/images/logo.svg" alt="" srcset="">
        <div class="nigvation">
            <?php if(Route::has('login')): ?>
            <ul>
                
                    <?php if(auth()->guard()->check()): ?>
                        
                    <li><a class="active" href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
                        
                    <li><a  href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                    <i id="menu-close" class="fa-regular fa-circle-xmark"></i>
                    <li><a href="<?php echo e(url('/courses')); ?>">Courses</a></li>
                    <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>

                        

                    <?php else: ?>
                        <li><a  href="<?php echo e(url('/index')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('login')); ?>">Log in</a></li>
                        

                        <?php if(Route::has('register')): ?>
                        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>

                    
                        <li><a  href="<?php echo e(url('/about')); ?>">About</a></li>
                        <li><a  href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                        <i id="menu-close" class="fa-regular fa-circle-xmark"></i>
                        <li><a href="<?php echo e(url('/courses')); ?>">Courses</a></li>
                        
                        
                        <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
                        <?php endif; ?>
                    
                    <?php endif; ?>
                    
                </ul>
                <?php endif; ?>
            <img  id="menu-btn" src="assest/images/menu.png" alt="" srcset="">
        </div>
    </nav>

    
    <section id="about-home">
        <h2>Android Development Blogs</h2>

        

    </section>
                <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-block">
                        <strong><?php echo e($message); ?></strong>
                        </div>
                <?php endif; ?>
                <div id="blog-container">
                    <div class="blogs">
                        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="post">
                                <h3><?php echo e($item->title); ?></h3>
                                <h4><?php echo e($item->category); ?></h4>
                                <p><?php echo e($item->description); ?></p>
                                <hr>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="post">
                                <h4>No Record Found</h4>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                
                
                
            
            
            
        </div>
        
    </div>





    
    <section>
        <footer>
            <div class="footer-col">
                <h3>Top Products</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Managed Website</li>
                <li>Marketing Services</li>

            </div>
            <div class="footer-col">
                <h3>Quicks Links</h3>
                <li>Home</li>
                <li>About</li>
                <li>Blog</li>
                <li>Course</li>

            </div>
            <div class="footer-col">
                <h3>Features</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Managed Website</li>
                <li>Marketing Services</li>

            </div>
            <div class="footer-col">
                <h3>Resources</h3>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Managed Website</li>
                <li>Marketing Services</li>

            </div>
            <div class="copyright">
                <p>Copyright © 2023 All Rights reserved</p>
                <div>
                    

                </div>
            </div>
            
            <script>
                $('#menu-btn').click(function(){
                    $('nav .nigvation ul').addclass('active')
                })
                $('#menu-close').click(function(){
                    $('nav .nigvation ul').removeclass('active')
                })
            </script>
        </footer>

        
    </section>
    
</body>
</html><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/android.blade.php ENDPATH**/ ?>