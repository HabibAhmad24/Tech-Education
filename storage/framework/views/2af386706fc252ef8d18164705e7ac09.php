<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
        <h2>About Us</h2>
        

    </section>


    

  

    
    <section id="about-container">
        <div class="about-img">
            <img src="assest/images/a.png" alt="" srcset="">
        </div>
        <div class="about-text">
            <h2>Welcome!</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias nisi quae, tempora officia voluptatibus maxime, soluta eligendi vitae ipsa eius minus commodi ad iusto vero nemo laboriosam dolor voluptatem nihil?</p>
            <div class="about-fe">
                <img src="assest/images/fe1.png" alt="" srcset="">
                <div class="fe-text">
                    <h5>400+ Course</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium repellat aliquam, cumque libero architecto voluptate reprehenderit cupiditate minus delectus omnis quam facere? Quia, totam mollitia ab at temporibus deserunt amet.</p>

                </div>
            </div>
            <div class="about-fe">
                <img src="assest/images/fe2.png" alt="" srcset="">
                <div class="fe-text">
                    <h5>LifeTime Access</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium repellat aliquam, cumque libero architecto voluptate reprehenderit cupiditate minus delectus omnis quam facere? Quia, totam mollitia ab at temporibus deserunt amet.</p>

                </div>
            </div>
        </div>
        

    </section>
    <section id="features">
        <h1>Awasome Feature</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
        <div class="feature-base">
            <div class="feature-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Scholarship Facility</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>

            </div>

                <div class="feature-box">
                    <i class="fa-solid fa-file"></i>
                    <h3>Dell Online Course</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
    
                </div>
                
                    <div class="feature-box">
                        <i class="fa-solid fa-award"></i>
                        <h3>Global certification</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
        
                    </div>
                </div>
            </section>
            <section id="trust">
                <h1>Trusted By</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
                <div class="trust-img">
            <img src="assest/images/trust1.png" alt="Loading..">
            <img src="assest/images/trust2.png" alt="Loading..">
            <img src="assest/images/trust3.png" alt="Loading..">
            <img src="assest/images/trust4.png" alt="Loading..">
            <img src="assest/images/trust5.png" alt="Loading..">
            <img src="assest/images/trust6.png" alt="Loading..">
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
</html><?php /**PATH /var/www/html/Educationwebsite/resources/views/home/about.blade.php ENDPATH**/ ?>