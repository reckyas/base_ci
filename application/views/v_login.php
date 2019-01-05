<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?= $this->title ?>
		<?= $this->css ?>
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 d-flex align-items-center justify-content-center" style="height:100vh;">
				<div class="box d-flex flex-column justify-content-center align-items-center">
					<div  class="banner-login mb-3">
						<h1>Login</h1>
					</div>
					<div class="fom-login">
					 <form method="post" action="<?= base_url('login/auth'); ?>">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary align-self-center">Login</button>
					 </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?= $this->js ?>
	</body>
</html>