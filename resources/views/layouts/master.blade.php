<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="http://allfont.net/allfont.css?fonts=agency-fb-bold" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</head>
<body>
	<div class="header col-12 bg-dark h-25 w-100">
		<div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="d-flex w-50 order-0">
        <a class="navbar-brand mr-1" href="#"><img src="img/logo.png" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-end order-2" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/job">JOBS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/candidate">CANDIDATES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/employer">EMPLOYERS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog">BLOGS</a>
            </li>
            <?php 
            if(auth()->user()){
                ?>
            @if(auth()->user()->user_type_id_fk == 2)
                @if(auth()->user()->status == 113)
                {{ Auth::user()->username }}
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                @else
                <li class="nav-item ml-2 mr-2">
                    <a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#largeModal">Account</a>
                </li>
                @endif
            @elseif(auth()->user()->user_type_id_fk == 3)
            {{ Auth::user()->username }}
            @else
            <li class="nav-item ml-2 mr-2">
                <a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#largeModal">Account</a>
            </li>
            @endif
            @if(auth()->user()->user_type_id_fk == 3)
                @if(auth()->user()->status == 113)
            <li class="nav-item">
                <a type="button" class="btn btn-orange text-white" data-toggle="modal" data-target="#submit-job">Submit Job</a>
            </li>
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                @else
                <li class="nav-item ml-2 mr-2">
                    <a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#largeModal">Account</a>
                </li>
                @endif
            @endif
        <?php }else{?>
            <li class="nav-item ml-2 mr-2">
                <a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#largeModal">Account</a>
            </li><?php
        } ?>
        </ul>
    </div>
</nav>

		</div>
        <div>
            
        </div>
		
	</div>
        <!-- Begin Page Content -->
        @yield('content')
        <!-- /.container-fluid -->

    <section class="upper-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><h4 class="text-center text-white"><a href="#">ABOUT COMPANY</a></h4></div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><h4 class="text-center text-white"><a href="#">FAQ'S</a></h4></div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><h4 class="text-center text-white"><a href="#">STORE LOCATOR</a></h4></div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"><h4 class="text-center text-white"><a href="#">NEED HELP?</a></h4></div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"><h4 class=" text-white font-weight-bold">FOR SUBSCRIPTION!</h4>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control my-input" placeholder="Your Email">
                            <div class="input-group-append">
                              <a href="#" class="btn">SUBMIT </a>
                            </div>
                         </div>
                    </form></div>
                <div class="col-md-3"><h4 class=" text-white font-weight-bold">VISIT</h4>
                    <p class="text-justify text-white">
                        HAFEEZ CENTER Office No. 54, P2 plaza 2, Gulberg III, Lahore, Pakistan
                    </p></div>
                <div class="col-md-3"><h4 class=" text-white font-weight-bold">CONTACT</h4>
                    <p class=" text-justify text-white">Phone: 03075304892 <br>
                        Email: jobs4u@gmail.com</p></div>
                <div class="col-md-3 social-links"><h4 class=" text-white font-weight-bold">FOLLOW</h4>
                    <p><a href="#"><i class="fa fa-facebook"></i> <span>FACEBOOK</span></a></p>
                    <p><a href="#"><i class="fa fa-instagram"></i> <span>INSTAGRAM</span></a></p>
                    <p><a href="#"><i class="fa fa-twitter"></i> <span>TWITTER</span></a></p>
                    <p><a href="#"><i class="fa fa-linkedin"></i> <span>LINKEDIN</span></a></p>
                </div>
            </div>
        </div>
    </section> 

<div class="modal fade" id="largeModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-dark">
                          <h4 class="modal-title"><img src="img/logo.png" width="120px"></h4>
                          <button type="button" class="close text-white pt-4" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <h1 class="text-left text-dark">Login</h1>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="Enter your Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter your Password">
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                `   @enderror
                                  </div>    
                                  <p>
                                    <input type="submit" name="submit" class="btn btn-primary" value="LOGIN">
                                  </p>
                                  </form>
                                </div>
                                <div class="col-md-6">
                                  <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <h1 class="text-left text-orange">Register</h1>
                                  <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" type="text" name="username" placeholder="Enter your Username">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>
                                  <input type="hidden" name="status" value="112">
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="Enter your Email">
                                    @error('user_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Enter your Phone">
                                  </div>
                                  <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter your Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div> 
                                  <div class="form-group">
                                    <label> Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  </div> 
                                  <div class="form-group">
                                    <label> Select User Type</label>
                                    <select name="user_type">
                                        {{$usertype=\App\user_type::all()}}
                                        @foreach($usertype as $ut)
                                        <option value="{{$ut->id}}">{{$ut->user_type_name}}</option>
                                        @endforeach
                                    </select>
                                  </div>    
                                  <p>
                                    <input type="submit" name="submit" class="btn btn-primary" value="SIGN UP">
                                  </p>
                                  </form>
                                </div>
                              </div>
                        </div>

                      </div>
                    </div>
                  </div>
<!-- model ends -->
<div class="modal fade" id="submit-job" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-dark">
                          <h4 class="modal-title"><img src="img/logo.png" width="120px"></h4>
                          <button type="button" class="close text-white pt-4" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <?php 
                        if(auth()->user()){
                            ?>
                            @if(auth()->user()->user_type_id_fk == 3)
                                @if(auth()->user()->status == 113)
                                <form action="/Job/jobstore">
                                  <h1 class="text-center text-dark">Submit a Job</h1>
                                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                  <input type="hidden" name="post_status" value="112">
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">  
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" type="text" name="location" placeholder="Enter Your Location">
                                        </div>
                                        <div class="form-group">
                                            <label>Job Min Experience</label>
                                            <input class="form-control" type="text" name="job_min_experience" placeholder="Enter Your Location">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Job Category</label>
                                            <select name="job_category" class="form-control">
                                                <option>Select</option>
                                                {{$jobcategory=\App\job_categories::all()}}
                                                @foreach($jobcategory as $jc)
                                                <option value="{{$jc->id}}">{{$jc->job_category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Job Min Salary</label>
                                            <input class="form-control" type="text" name="job_min_salary" placeholder="Enter Your Location">
                                        </div>
                                        <div class="form-group">
                                            <label>Job Min Degree Level</label>
                                            <input class="form-control" type="text" name="job_min_degree" placeholder="Enter Degree Level">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="">  
                                        </div>
                                        <div class="form-group">
                                            <label>Job Type</label>
                                            <select name="job_type" class="form-control">
                                                <option>Select</option>
                                                {{$jobtype=\App\job_type::all()}}
                                                @foreach($jobtype as $jt)
                                                <option value="{{$jt->id}}">{{$jt->job_type_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Job Max Experience</label>
                                            <input class="form-control" type="text" name="job_max_experience" placeholder="Enter Your Location">
                                        </div>
                                        <div class="form-group">
                                            <label>Job SubCategory</label>
                                            
                                            <select name="job_subcategory" class="form-control">
                                                <option>Select</option>
                                                {{$jobsubcategory=\App\job_subcategories::all()}}
                                                @foreach($jobsubcategory as $jsc)
                                                <option value="{{$jsc->id}}">{{$jsc->job_subcategory_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Job Max Salary</label>
                                            <input class="form-control" type="text" name="job_max_salary" placeholder="Enter Your Location">
                                        </div>
                                        <div class="form-group">
                                            <label>Job Max Degree Level</label>
                                            <input class="form-control" type="text" name="job_max_degree" placeholder="Enter Degree">
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" type="text" name="description">
                                            </textarea>
                                        </div>
                                    </div>  
                                  </div>
                                    <h1 class="text-center text-dark">Company Details</h1>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name">  
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" name="company_website" class="form-control" placeholder="Enter the Company Website">  
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            
                                            <input type="submit" name="submit" class="btn btn-orange">
                                        </div>
                                    </div>
                                </form>
                                
                                @endif
                                
                            @endif
                        <?php
                    }else{
                            echo "string";
                        }  ?>
                        </div>

                      </div>
                    </div>
                  </div>
<!-- model ends -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</body>
</html>