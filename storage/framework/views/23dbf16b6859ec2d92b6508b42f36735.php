<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="assest/style.css">
    
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
</head>
<body>
    


    <nav>
        <img src="assest/images/logo.svg" alt="" srcset="" >
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
   

    

    <section id="home">
        <h2>Enhance Your Future with TechEduca</h2>
        <p>In a rapidly evolving world, where technology is at the forefront of every industry, staying ahead of the curve has never been more critical. TechEduca, your gateway to the future, offers you the knowledge and skills needed to excel in this digital age. Our comprehensive courses and expert instructors guide you through the intricacies of technology, opening up a world of opportunities.</p>
        <div class="btn">
            <a class="blue" href="#">Learn More</a>
            <a class="yellow" href="<?php echo e(url('/blog')); ?>">Visit Blogs</a>
        </div>

    </section>

    
    <section id="features">
        <h1>Awasome Feature</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
        <div class="feature-base">
            <div class="feature-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Blogs Posting</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>

            </div>

                <div class="feature-box">
                    <i class="fa-solid fa-file"></i>
                    <h3>Manage Your Blogs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
    
                </div>
                
                    <div class="feature-box">
                        <i class="fa-solid fa-award"></i>
                        <h3>Tech Education</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
        
                    </div>
        </div>
    </section>


    
    <section id="course">
        <h1>Latest News</h1>
        <p>Find Here the latest News about Tech</p>
        <div class="course-box">


            
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="courses">
                
                <img src="assest/images/c1.jpg" alt="" srcset="" width="200px" height="200px">
                <div class="details">
                    
                        
                    <span><?php echo e($course->updated_at); ?></span>
                    <h6><?php echo e($course->title); ?></h6>
                    <p><?php echo e($course->description); ?></p>
                    <a href="<?php echo e($course->readmore); ?>" targart='_blank' >Read More</a>
                    
                    
                </div>
                <div class="cost">
                    <?php echo e($course->source); ?>

                </div>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                         
            

    </section>
    
    
    
    
    
        
    <section id="registration">
        <div class="reminder">
            <p>Regsiter Yourself to get Extra Features</p>
            <h1>Regsiter to Get it</h1>
            <div class="time" >
                <!-- Display the countdown timer in an element -->
<p id="time" class="date"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("time").innerHTML = days + " Days " + hours + " Hours "
  + minutes + " Minutes " + seconds + " Second";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
                
                
            </div>
        </div>
        
        

        

    </section>

    
    
    
    
    <section id="profile">
        <section id="features">
            <h1>Community Expert</h1>
            <p>A Community Expert is a highly knowledgeable and respected individual within a specific field or community. They actively share their expertise, have a strong reputation, and often mentor and advocate for their domain. They are instrumental in fostering knowledge sharing and growth within their community.</p>
            <div class="feature-base">
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="feature-box">
                    <img src="post/<?php echo e($review->image); ?>" alt="" style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 50%;
                    border-radius: 100px">
                    
                    <h3 style="text-align: center"><?php echo e($review->name); ?></h3>
                    <p style="text-align: center">Graphic Expert</p>
                    <br>
                    <br>
                    <div style="margin-left: 35%">
                        <a href="<?php echo e($review->facebook); ?>"><i class="fa-brands fa-facebook" ></i></a>
                        <a href="<?php echo e($review->linkedin); ?>"><i class="fa-brands fa-linkedin" ></i></a>
                        <a href="<?php echo e($review->x); ?>"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                
            
                </div>
            </div>
        </section>
    

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
                <li >Home</li>
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
</html><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/index.blade.php ENDPATH**/ ?>