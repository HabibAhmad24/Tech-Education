<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categories</title>
    <link rel="stylesheet" href="assest/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>


</head>
<body>

    
    <nav>
        <img src="assest/images/logo.svg" alt="" srcset="">
        <div class="nigvation">
            <ul>
                <i id="menu-close" class="fa-regular fa-circle-xmark"></i>
                <li><a  href="<?php echo e(url('/index')); ?>">Home</a></li>
                <li><a  href="<?php echo e(url('/about')); ?>">About</a></li>
                <li><a class="active" href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                <li><a href="<?php echo e(url('/courses')); ?>">Courses</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>

            </ul>
            <img  id="menu-btn" src="assest/images/menu.png" alt="" srcset="">
        </div>
    </nav>

    
    <section id="about-home">
        <h2>Data Science Blogs</h2>

        

    </section>
    <div id="blog-container">
        <div class="blogs">
            
            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                
            <div class="post">
                
                <h3><?php echo e($item->title); ?></h3>
                <h4><?php echo e($item->categories); ?></h4>
                <p><?php echo e($item->description); ?></p>
                <hr>
                
                
                
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h4>No Record Found</h4>
            <?php endif; ?>
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
</html><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/datascience.blade.php ENDPATH**/ ?>