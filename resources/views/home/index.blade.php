<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="assest/style.css">
    {{-- <link rel="Fontawasome" href="assest/font-awesome-4.7.0"> --}}
    <script src="https://kit.fontawesome.com/03dd516e35.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
</head>
<body>
    {{-- nigvation bar --}}


    <nav>
        <img src="assest/images/logo.svg" alt="" srcset="" >
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
   

    {{-- slider and home --}}

    <section id="home">
        <h2>Enhance Your Future with TechEduca</h2>
        <p>In a rapidly evolving world, where technology is at the forefront of every industry, staying ahead of the curve has never been more critical. TechEduca, your gateway to the future, offers you the knowledge and skills needed to excel in this digital age. Our comprehensive courses and expert instructors guide you through the intricacies of technology, opening up a world of opportunities.</p>
        <div class="btn">
            <a class="blue" href="#">Learn More</a>
            <a class="yellow" href="{{url('/blog')}}">Visit Blogs</a>
        </div>

    </section>

    {{-- features --}}
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


    {{-- Course --}}
    <section id="course">
        <h1>Latest News</h1>
        <p>Find Here the latest News about Tech</p>
        <div class="course-box">


            
            @foreach ($courses as $course)
            <div class="courses">
                
                <img src="assest/images/c1.jpg" alt="" srcset="" width="200px" height="200px">
                <div class="details">
                    {{-- @dd($courses) --}}
                        
                    <span>{{$course->updated_at}}</span>
                    <h6>{{$course->title}}</h6>
                    <p>{{$course->description}}</p>
                    <a href="{{$course->readmore}}" targart='_blank' >Read More</a>
                    {{-- <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>{{$course->rating}}</span>                                                                      
                        
                    </div> --}}
                    
                </div>
                <div class="cost">
                    {{$course->source}}
                </div>
                
            </div>
            @endforeach                                         
            

    </section>
    
    {{-- regisrtation --}}
    
    {{-- @dd($review) --}}
    
        
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
                
                {{-- <div class="time">
                     <br>  Days
                </div>
                <div class="date">
                    {{date('i')}} <br> Hours
                </div>
                <div class="date">
                    {{date("s")}} <br> Mintues
                </div>
                <div class="date">
                    58 <br> Second
                </div> --}}
            </div>
        </div>
        {{-- <div class="form" style="margin-left: 50px">
            <h3>Create Account NOW!</h3>
            <br>
            <input type="text" placeholder="Name" name="name" id="">
            <br>
            <br>
            <input type="email" placeholder="Email" name="email" id="">
            <br>
            <br>
            <input type="Number" placeholder="Phone Number" name="phone" id="">
            <div class="btn">
                <input type="submit" value="Submit" class="blue">
                {{-- <a class="blue" href="#">Submit</a> --}}
        

        

    </section>

    {{-- profile section --}}
    
    
    {{-- @dd($reviews) --}}
    <section id="profile">
        <section id="features">
            <h1>Community Expert</h1>
            <p>A Community Expert is a highly knowledgeable and respected individual within a specific field or community. They actively share their expertise, have a strong reputation, and often mentor and advocate for their domain. They are instrumental in fostering knowledge sharing and growth within their community.</p>
            <div class="feature-base">
                @foreach ($reviews as $review)
                <div class="feature-box">
                    <img src="post/{{$review->image}}" alt="" style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 50%;
                    border-radius: 100px">
                    
                    <h3 style="text-align: center">{{$review->name}}</h3>
                    <p style="text-align: center">Graphic Expert</p>
                    <br>
                    <br>
                    <div style="margin-left: 35%">
                        <a href="{{$review->facebook}}"><i class="fa-brands fa-facebook" ></i></a>
                        <a href="{{$review->linkedin}}"><i class="fa-brands fa-linkedin" ></i></a>
                        <a href="{{$review->x}}"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    
                </div>
                @endforeach
    
                
            
                </div>
            </div>
        </section>
    

    </section>

    {{-- footer --}}

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