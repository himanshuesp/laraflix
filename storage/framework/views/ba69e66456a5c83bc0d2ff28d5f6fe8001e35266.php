<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<!-- Branding Image -->
			<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
				<?php echo e(config('app.name', 'Laravel')); ?>

			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Categories</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/upload">Upload</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0" method="post" action="/search">
					<?php echo e(csrf_field()); ?>

					<input class="form-control mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
				</form>
				<ul class="nav navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Username</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Logout</a>
						</div>
					</li>
				</ul>
			</div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
	<script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
	<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
