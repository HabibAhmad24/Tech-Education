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
        <h2>Contat Us</h2>
        

    </section>
    <form style="padding: 50px" action="/contact/feedback" method="POST">
        @csrf
        <div class="mb-3 lg-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                                 
                @endif
            <br>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
        <div class="mb-3 lg-6">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          @if ($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
                                 
                @endif
            <br>
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Feedback</label>
          <textarea  id="" cols="30" rows="10" class="form-control" name="feedback"></textarea>
          @if ($errors->has('feedback'))
                <span class="text-danger">{{$errors->first('feedback')}}</span>
                                 
                @endif
            <br>
        </div>
          {{-- <input type="textarea" class="form-control" id="exampleInputPassword1"> --}}
        </div>
        {{-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
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