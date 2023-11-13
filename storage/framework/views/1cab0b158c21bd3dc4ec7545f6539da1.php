<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assest/style.css">

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
        <h2>Courses</h2>
        

    </section>

    <section id="course">
        <h1>Our Popular Courses</h1>
        <p>Discover the courses that everyone's talking about at TechEduca. Our popular courses are carefully curated to provide you with in-demand skills that are not only relevant but essential in today's digital landscape.From web development and app design to data analysis and cybersecurity, these courses have been handpicked to ensure you're equipped with the knowledge and expertise that will set you apart in your career.Join the ranks of countless successful learners who have already benefited from our popular courses. </p>
        
        <div class="course-box">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            
            <div  class="courses">
                <img src="assest/images/c1.jpg" alt="" srcset="">
                <div class="details">
                    <span><?php echo e($item->updated_at); ?></span>
                    <h6><?php echo e($item->title); ?></h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span><?php echo e($item->rating); ?></span>
                        
                    </div>
                    <a href="<?php echo e($item->id); ?>/coursedetails">Read More</a>
                    
                </div>
                <div class="cost">
                    $<?php echo e($item->price); ?>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</html><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/courses.blade.php ENDPATH**/ ?>