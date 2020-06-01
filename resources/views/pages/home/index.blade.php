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
				
				<div class="my-2 my-md-3">
                    
					<ul class="social-list list-inline mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
			        </ul><!--//social-list-->
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>
    
    <div class="main-wrapper">
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ asset('assets/assets/images/blog/blog-post-thumb-1.jpg') }}" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html">Why Every Developer Should Have A Blog</a></h3>
						    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ asset('assets/assets/images/blog/blog-post-thumb-1.jpg') }}" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html">Learn React in 24 Hours</a></h3>
						    <div class="meta mb-1"><span class="date">Published 2 months ago</span><span class="time">10 min read</span><span class="comment"><a href="#">23 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item  my-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ asset('assets/assets/images/blog/blog-post-thumb-1.jpg') }}" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html">About Remote Working</a></h3>
						    <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">2 min read</span><span class="comment"><a href="#">1 comment</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
				
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

