			<header>
				<!-- Navigation -->
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<div class="container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					        </button>
					        <a class="navbar-brand" id="logo" href="#"><img src="images/logo.png" alt="logo"></a>
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul id="mainNav" class="nav navbar-nav">
					            <li><a href="index.php?pg=home">Home</a></li>
					            <li><a href="index.php?pg=about">About</a></li>
					            <li><a href="index.php?pg=work">Work</a></li>
					            <li><a href="index.php?pg=contact">Contact</a></li>
					            <li><?php require_once('emp_search.php'); ?></li>
					        </ul>
					    </div>
					    <!-- /.navbar-collapse -->
					</div>
				<!-- /.container -->
				</nav>
			</header>