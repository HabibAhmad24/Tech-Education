<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Details</title>
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assest/style.css')); ?>">

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
        <h2>Enroll Our Popular Courses & Skill Up</h2>
        

    </section>

    <section id="course-inner">
        <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="overview">
                
            <img class="course-img" src="asset('assest/post/<?php echo e($courses->image); ?>')" alt="" srcset="">
            <div class="course-head">
                <div class="c-name">
                    <h2><?php echo e($courses->title); ?></h2>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                        
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
                    
                </div>
                <span>$<?php echo e($courses->price); ?></span>
            </div>
            <h3>Instructure</h3>
            <div class="details">
                
                <h5><?php echo e($courses->instructurename); ?></h5>
                <p><?php echo e($courses->role); ?></p>
                <hr>
            </div>
            <h2 style="margin-top: 20px">Course Overview</h2>
            <p style="margin-bottom: 20px"><?php echo e($courses->courseoverview); ?></p>
            <hr>
            <div class="learn">
                <h2>Why you will learn</h2>
                <ul style="padding: 10px">
                    <li><?php echo e($courses->reason); ?></li>
                    <li><?php echo e($courses->reason); ?></li>

                    
                </ul>
                
            </div>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a class="blue" href="#">Enroll Now</a>



            
        </div>
    </section>


    





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
</html><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/coursedetails.blade.php ENDPATH**/ ?>