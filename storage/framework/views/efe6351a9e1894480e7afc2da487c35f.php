<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assest/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                    
                    <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>


                    <?php else: ?>
                        <li><a  href="<?php echo e(url('/index')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('login')); ?>">Log in</a></li>
                        

                        <?php if(Route::has('register')): ?>
                        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>

                        <li><a  href="<?php echo e(url('/about')); ?>">About</a></li>
                        <li><a  href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                        <i id="menu-close" class="fa-regular fa-circle-xmark"></i>
                        
                        
                        
                        <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
                        <?php endif; ?>
                    
                    <?php endif; ?>
                    
                </ul>
                <?php endif; ?>
            <img  id="menu-btn" src="assest/images/menu.png" alt="" srcset="">
        </div>
    </nav>
    
    <section id="about-home">
        <h2>Contat Us</h2>
        

    </section>
    <form style="padding: 50px" action="/contact/feedback" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3 lg-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            <?php if($errors->has('name')): ?>
                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                 
                <?php endif; ?>
            <br>
            
          </div>
        <div class="mb-3 lg-6">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          <?php if($errors->has('email')): ?>
                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                 
                <?php endif; ?>
            <br>
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Feedback</label>
          <textarea  id="" cols="30" rows="10" class="form-control" name="feedback"></textarea>
          <?php if($errors->has('feedback')): ?>
                <span class="text-danger"><?php echo e($errors->first('feedback')); ?></span>
                                 
                <?php endif; ?>
            <br>
        </div>
          
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




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
</html><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/contact.blade.php ENDPATH**/ ?>