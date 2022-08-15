<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog Site Template</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog Site Template">
	<meta name="author" content="https://youtube.com/FollowAndrew">
	<link rel="shortcut icon" href="images/logo.png">

	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body>

	<header class="header text-center">
		<a class="site-title pt-lg-4 mb-0" href="index.html">SiteName.dev</a>

		<nav class="navbar navbar-expand-lg navbar-dark">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
				aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column">
				<img class="mb-3 mx-auto logo" src="images/logo.png" alt="logo">

				<ul class="navbar-nav flex-column text-sm-center text-md-left">
					<li class="nav-item">
						<a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Blog Page</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Blog
							Archive</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-primary" href="contact.html"><i
								class="fas fa-envelope fa-fw mr-2"></i>Contact Us</a>
					</li>
				</ul>
				<hr>
				<ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul>

			</div>
		</nav>
	</header>

	<div class="main-wrapper">
		<header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading">Blog Page Title About Blogging</h1>
		</header>
		<article class="content px-3 py-5 p-md-5">
			<div class="container">
				<header class="content-header">
					<div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="tag"><i class='fa fa-tag'></i> tag</span><span class="tag"><i class='fa fa-tag'></i> category</span><span class="comment"><a href="#comments"><i class='fa fa-comment'></i> 3 comments</a></span></div>
				</header>

				<div class="content-body">
					<figure class="blog-banner">
						<a href="#"><img class="img-fluid" src="images/blog-post-banner.jpg" alt="image"></a>
						<figcaption class="mt-2 text-center image-caption">Image Credit: <a href="#" target="_blank">URL
								Here</a></figcaption>
					</figure>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
						quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
						rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
						Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
						tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>


					<h3 class="mt-5 mb-3">Typography</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus.</p>
					<h5 class="my-3">Bullet Points:</h5>
					<ul class="mb-5">
						<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
						<li class="mb-2">Aenean commodo ligula eget dolor.</li>
						<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
					</ul>
					<ol class="mb-5">
						<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
						<li class="mb-2">Aenean commodo ligula eget dolor.</li>
						<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
					</ol>
					<h5 class="my-3">Quote Example:</h5>
					<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
						<p class="mb-2">You might not think that programmers are artists, but programming is an
							extremely creative profession. It's logic-based creativity.</p>
						<footer class="blockquote-footer">John Romero</footer>
					</blockquote>

					<h5 class="my-3">Table Example:</h5>
					<table class="table table-striped my-5">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>


					<h3 class="mt-5 mb-3">Video Example</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
						quis enim. </p>

					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/SPFDLHNm5KQ" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>

				</div>

				<nav class="blog-nav nav nav-justified my-5">
					<a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i
							class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
					<a class="nav-link-next nav-item nav-link rounded-right" href="page.html">Next<i
							class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				<hr>
				<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
								<?php 
                                    if(! have_comments()){
                                        echo "Leave a Comment";
                                    }
                                    else {
                                        echo get_comments_number() . "Comments";
                                    }
                                ?>
                            </h2><!-- .comments-title -->

						</div><!-- .comments-header -->

						<div class="comments-inner">

							<?php 
                                wp_list_comments(
                                    array(
                                    'avatar-size' => 120,
                                    'style' => 'div',
                                    )
                                );
                            ?>

						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">
					
                    <?php
                        if(comments_open()){
                            comment_form(
                                array(
                                    'class' => '',
                                    'title_reply_before' => '<h2></h2>',
                                    'title_reply_after' => '<h2></h2>',
                                )
                            );
                        }
                    ?>

				</div>

			</div>
			<!--//container-->
		</article>

		<footer class="footer text-center py-2 theme-bg-dark">

			<p class="copyright"><a href="https://youtube.com/FollowAndrew">FollowAndrew</a></p>

		</footer>

	</div>
	<!--//main-wrapper-->


	<!-- Bootstrap Javascript -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<script src="js/main.js"></script>

</body>

</html>