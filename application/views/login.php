
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Login Page 1 | Keenthemes</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link href="<?=asset_url()?>/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
		<link href="<?=asset_url()?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=asset_url()?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?=asset_url()?>/media/logos/favicon.ico" />
	</head>
	<body id="kt_body" style="background-image: url(<?=asset_url()?>/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<div class="d-flex flex-column flex-root">
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<a href="#" class="text-center mb-10">
							<img src="<?=asset_url()?>/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
						</a>
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">アメージングメトロニックを発見
						<br />優れたビルドツールを使用</h3>
					</div>
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?=asset_url()?>/media/svg/illustrations/login-visual-1.svg)"></div>
				</div>
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
					<div class="d-flex flex-column-fluid flex-center">
						<div class="login-form login-signin">
							<form class="form" novalidate="novalidate" id="kt_login_signin_form">
								<div class="pb-13 pt-lg-0 pt-5">
									<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">メトロニックへようこそ</h3>
								</div>
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">ID</label>
									<input style ="border: solid 1px grey;" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="id" autocomplete="off" />
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
									</div>
									<input style ="border: solid 1px grey;" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
								</div>
								<div class="pb-lg-0 pb-5">
									<button type="button" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">サインイン</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			 var HOST_URL = '<?= base_url()?>';
		</script>
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<script src="<?=asset_url()?>/plugins/global/plugins.bundle.js"></script>
		<script src="<?=asset_url()?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?=asset_url()?>/js/scripts.bundle.js"></script>
		<script src="<?=asset_url()?>/scripts/user.js"></script>
	</body>
</html>