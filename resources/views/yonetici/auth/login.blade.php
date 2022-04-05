@extends('yonetici.admin.authentication.master')
@section('title', 'Giriş Paneli')
@section('content')
<div class="authincation h-100">
	<div class="container h-100">
		<div class="row justify-content-center h-100 align-items-center">
			<div class="col-md-6">
				<div class="authincation-content">
					<div class="row no-gutters">
						<div class="col-xl-12">
							<div class="auth-form">
								<form class="theme-form login-form needs-validation" method="post" action="{{route('Login.post')}}">
									@csrf
									<div class="mb-3">
										<p style="text-align: center;"><img class="bg-img-cover bg-center" src="{{ asset('yonetici/images/logo.png') }}" style="height: 45px;" alt="Matgis" /></p>
									</div>
									<h4 class="text-center mb-4">Yönetici Giriş Ekranı</h4>
									<div class="form-group">
										<label  class="control-label sr-only">Kullanıcı Adı</label>
										<input type="text" name='username' class="form-control round"  required="" id="signin-email"  placeholder="Kullanıcı Adı">
									</div>
									<div class="form-group">
										<label for="signin-password" class="control-label sr-only">Şifre</label>
										<input type="password" name="password"  class="form-control round" id="signin-password"  placeholder="Şifre">
										<div class="show-hide"><span class="show"> </span></div>
									</div>
									<div class="form-group clearfix">
										<label class="fancy-checkbox element-left">
											<input type="checkbox">
											<span>Beni Hatırla</span>
										</label>
									</div>
									<button type="submit" class="btn btn-primary btn-round btn-block">Giriş Yap</button>
								</form>
								@if($errors->any())
									<div class="col-lg-12 col-md-12">
										<div class="alert alert-danger">
											{{$errors->first()}}
										</div>
									</div>
									@endif   
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script>
	    (function () {
	        "use strict";
	        window.addEventListener(
	            "load",
	            function () {
	                // Fetch all the forms we want to apply custom Bootstrap validation styles to
	                var forms = document.getElementsByClassName("needs-validation");
	                // Loop over them and prevent submission
	                var validation = Array.prototype.filter.call(forms, function (form) {
	                    form.addEventListener(
	                        "submit",
	                        function (event) {
	                            if (form.checkValidity() === false) {
	                                event.preventDefault();
	                                event.stopPropagation();
	                            }
	                            form.classList.add("was-validated");
	                        },
	                        false
	                    );
	                });
	            },
	            false
	        );
	    })();
	</script>


    @push('scripts')
    @endpush

@endsection