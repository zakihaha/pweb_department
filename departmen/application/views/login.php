<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="preloader" style="display: none;">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
		<div class="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 col-xlg-9 col-md-7">
						<div class="card">
							<div class="card-body">
								<form class="form-horizontal form-material" id="formLogin">

									<div class="form-group">
										<label for="example-email" class="col-md-12">Email</label>
										<div class="col-md-12">
											<input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line form-user-input" name="email" id="example-email">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12">Password</label>
										<div class="col-md-12">
											<input type="password" value="" name="password" class="formcontrol form-control-line form-user-input">
										</div>
									</div>


									<div class="form-group">
										<div class="col-sm-12">
											<button class="btn btn-success">LOGIN</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Column -->
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$("#formLogin").on('submit', function(e) {
			e.preventDefault();
			checkLogin();
		});
	</script>
</body>

</html>
