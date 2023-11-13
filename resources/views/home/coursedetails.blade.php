<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Details</title>
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assest/style.css')}}">

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
        <h2>Enroll Our Popular Courses & Skill Up</h2>
        

    </section>

    <section id="course-inner">
        @foreach ($course as $courses)
        {{-- @dd($courses) --}}
        <div class="overview">
                
            <img class="course-img" src="asset('assest/post/{{$courses->image}}')" alt="" srcset="">
            <div class="course-head">
                <div class="c-name">
                    <h2>{{$courses->title}}</h2>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                        
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sequi exercitationem</p>
                    
                </div>
                <span>${{$courses->price}}</span>
            </div>
            <h3>Instructure</h3>
            <div class="details">
                
                <h5>{{$courses->instructurename}}</h5>
                <p>{{$courses->role}}</p>
                <hr>
            </div>
            <h2 style="margin-top: 20px">Course Overview</h2>
            <p style="margin-bottom: 20px">{{$courses->courseoverview}}</p>
            <hr>
            <div class="learn">
                <h2>Why you will learn</h2>
                <ul style="padding: 10px">
                    <li>{{$courses->reason}}</li>
                    <li>{{$courses->reason}}</li>

                    {{-- <li>Everything Include</li>
                    <li>All about variables and Function and many more</li>
                    <li>All Core Concept are Include</li>
                    <li>Project Learning</li>
                    <li>Object Oriented Programming (OOP)</li> --}}
                </ul>
                
            </div>
            
            @endforeach
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