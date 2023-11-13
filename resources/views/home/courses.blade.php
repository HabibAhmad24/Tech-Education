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

    {{-- nav --}}
    <nav>
        <img src="assest/images/logo.svg" alt="" srcset="">
        <div class="nigvation">
            @if (Route::has('login'))
            <ul>
                
                    @auth
                        {{-- <a href="" class="active" >Home</a> --}}
                    <li><a class="active" href="{{ url('/home') }}">Dashboard</a></li>
                        {{-- <li><a  href="{{url('/about')}}">About</a></li> --}}
                    <li><a  href="{{url('/blog')}}">Blog</a></li>
                    <i id="menu-close" class="fa-regular fa-circle-xmark"></i>
                    {{-- <li><a href="{{url('/courses')}}">Courses</a></li> --}}
                    <li><a href="{{url('/contact')}}">Contact Us</a></li>

                        

                    @else
                        <li><a  href="{{url('/index')}}">Home</a></li>
                        <li><a href="{{ route('login') }}">Log in</a></li>
                        

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
          
                        <li><a  href="{{url('/about')}}">About</a></li>
                        <li><a  href="{{url('/blog')}}">Blog</a></li>
                        <i id="menu-close" class="fa-regular fa-circle-xmark"></i>
                        {{-- <li><a href="{{url('/courses')}}">Courses</a></li> --}}
                        {{-- <li><a href="{{url('../login')}}">Login</a></li> --}}
                        {{-- <li><a href="{{url('../register')}}">Register</a></li> --}}
                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                        @endif
                    
                    @endauth
                    
                </ul>
                @endif
            <img  id="menu-btn" src="assest/images/menu.png" alt="" srcset="">
        </div>
    </nav>
    {{-- home section --}}
    <section id="about-home">
        <h2>Courses</h2>
        

    </section>

    <section id="course">
        <h1>Our Popular Courses</h1>
        <p>Discover the courses that everyone's talking about at TechEduca. Our popular courses are carefully curated to provide you with in-demand skills that are not only relevant but essential in today's digital landscape.From web development and app design to data analysis and cybersecurity, these courses have been handpicked to ensure you're equipped with the knowledge and expertise that will set you apart in your career.Join the ranks of countless successful learners who have already benefited from our popular courses. </p>
        
        <div class="course-box">
            @foreach ($courses as $item)
            
            
            <div  class="courses">
                <img src="assest/images/c1.jpg" alt="" srcset="">
                <div class="details">
                    <span>{{$item->updated_at}}</span>
                    <h6>{{$item->title}}</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>{{$item->rating}}</span>
                        
                    </div>
                    <a href="{{$item->id}}/coursedetails">Read More</a>
                    
                </div>
                <div class="cost">
                    ${{$item->price}}
                </div>
            </div>
            @endforeach
        </div>

    </section>
            {{-- <div class="courses" onclick="window.location.href='{{url('/coursedetails')}}'">
                <img src="assest/images/c1.jpg" alt="" srcset="">
                <div class="details">
                    <span>Update Date</span>
                    <h6>JavaScript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(239)</span>

                    </div>

                </div>
                <div class="cost">
                    $10.99
                </div>
            </div>
            <div class="courses" onclick="window.location.href='{{url('/coursedetails')}}'">
                <img src="assest/images/c1.jpg" alt="" srcset="">
                <div class="details">
                    <span>Update Date</span>
                    <h6>JavaScript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(239)</span>

                    </div>

                </div>
                <div class="cost">
                    $10.99
                </div>
            </div>
            <div class="courses" onclick="window.location.href='{{url('/coursedetails')}}'">
                <img src="assest/images/c2.jpg" alt="" srcset="">
                <div class="details">
                    <span>Update Date</span>
                    <h6>JavaScript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(239)</span>

                    </div>

                </div>
                <div class="cost">
                    $10.99
                </div>
            </div>
            <div class="courses" onclick="window.location.href='{{url('/coursedetails')}}'">
                <img src="assest/images/c3.jpg" alt="" srcset="">
                <div class="details">
                    <span>Update Date</span>
                    <h6>JavaScript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(239)</span>

                    </div>

                </div>
                <div class="cost">
                    $10.99
                </div>
            </div>
            <div class="courses" onclick="window.location.href='{{url('/coursedetails')}}'">
                <img src="assest/images/c4.jpg" alt="" srcset="">
                <div class="details">
                    <span>Update Date</span>
                    <h6>JavaScript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(239)</span>

                    </div>

                </div>
                <div class="cost" onclick="window.location.href='{{url('/coursedetails')}}'">
                    $10.99
                </div>
            </div>
            <div class="courses" onclick="window.location.href='{{url('/coursedetails')}}'">
                <img src="assest/images/c5.jpg" alt="" srcset="">
                <div class="details">
                    <span>Update Date</span>
                    <h6>JavaScript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(239)</span>

                    </div>

                </div>
                <div class="cost">
                    $10.99
                </div>
            </div>
            <div class="courses" onclick="window.location.href='{{url('/coursedetails')}}'">
                <img src="assest/images/c6.jpg" alt="" srcset="">
                <div class="details">
                    <span>Update Date</span>
                    <h6>JavaScript Beginners Course</h6>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>(239)</span>

                    </div>

                </div>
                <div class="cost">
                    $10.99
                </div>
            </div> --}}

        








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
                    {{-- <h3>Social Media</h3>
                    <div >
                        <a href="www.facebook.com" style="width: 1000px"><i class="fa-brands fa-facebook" ></i></a>
                        <a href="www.linkedin.com"><i class="fa-brands fa-linkedin" ></i></a>
                        <a href="www/twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        </div> --}}

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
</html>