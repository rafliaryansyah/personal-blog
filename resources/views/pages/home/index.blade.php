<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bootstrap 4 Blog Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
	<script defer src="{{ asset('assets/assets/fontawesome/js/all.min.js') }}"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/assets/css/theme-1.css') }}">

</head> 

<body>
    
    <header class="header text-center" style="background-color: #458AA8">
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{ asset('assets/assets/images/profile.png') }}" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Rafli Aryansyah. I am a web developer with backend capabilities and a specialist using Laravel as a major for building applications.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
			        <hr> 
				</div><!--//profile-section-->
				
				<div class="my-4 my-md-3">
                    
					<ul class="social-list list-inline mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/rafliaryansyah"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
			        </ul><!--//social-list-->
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>
    
    <div class="main-wrapper">
	    <section class="blog-list px-5 py-5 p-md-5">
		    <div class="container">
                @foreach ($data as $result)
                    <div class="item mb-3">
                        <div class="card">
                            <div class="card-body">         
                                <div class="media">
                                    <a href="">
                                        <img class="mr-4 img-fluid post-thumb d-none d-md-flex" src="{{ $result->image }}" alt="image">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="title mb-1">
                                            <a href="blog-post.html">{{ $result->title }}</a>
                                        </h3>
                                        <div class="meta mb-1">
                                            <span class="date">Published {{ $result->created_at->diffForHumans() }}</span>
                                            <span class="time">5 min read</span>
                                            <span class="comment">
                                                <a href="#"><strong>{{ $result->users->name }}</strong></a>
                                            </span>
                                        </div>
                                        <div class="intro">{{ substr(strip_tags($result->content), 0, 200) }}...</div>
                                        <a class="more-link" href="blog-post.html">Read more &rarr;</a>
                                    </div><!--//media-body-->
                                </div><!--//media-->
                            </div>
                        </div>
                    </div><!--//item-->
                @endforeach
		    </div>
	    </section>
    
    </div><!--//main-wrapper-->
    

    
       
    <!-- Javascript -->          
    <script src="{{ asset('assets/assets/plugins/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/popper.min.js') }}"></script> 
    <script src="{{ asset('assets/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script> 

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{ asset('assets/assets/js/demo/style-switcher.js') }}"></script>     
    

</body>
</html> 

