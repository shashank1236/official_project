<head> 
	@include("admin.include.admin_global_css")
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/admin_style.css') }}">
	<title>Admin Login</title>
</head>
<body>
    <div class="card col-lg-5 gp-ad-login" id="gp-ad-login">
    	<div class="gp-logo-div">
            <div class="gp-logo">
                <img class="gp-logo-img" src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="gp-logo-text">
                <div>Gyan Bharti</div> <div>public school</div>
            </div>
        </div>
    	<form class="needs-validation m-3" method="post" id="admin_login_form" novalidate>
    		<h5 class="text-center" style="color: #033967">Welcome, Plese login...</h5>
    		<div class="invalid-feedback text-center" id="invalidDetails"> Invalid details </div>
	        <div class="mb-3">
	            <label for="username_email">Username / Email</label>
	            <input type="text" class="form-control" id="username_email" placeholder="Username / Email" required>
	            <div class="invalid-feedback"> Please enter username or email </div>
	        </div>
	        <div class="mb-3">
	            <label for="password">Password</label>
	            <input type="password" class="form-control" id="password" placeholder="Password" required>
	            <div class="invalid-feedback"> Please enter password </div>
	        </div>
		    <div class="text-center mb-1">
		    	<button class="btn btn-primary" type="submit">Login Form</button>
		    </div>
		</form>
    </div>
    @include("admin.include.admin_global_scripts")
   <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<script>
		(function () {
		    'use strict';
		    window.addEventListener('load', function () {
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function (form) {
				form.addEventListener('submit', function (event) {
					event.preventDefault();
					if (form.checkValidity() === false) {
						event.stopPropagation();
						setTimeout(()=> {
							$(".card").effect("shake");
						}, 100);
					} else {
						$.ajax({
							url: "{{ url('admin/login') }}",
							method: "POST",
							headers: {
						        'X-CSRF-TOKEN':'{{ csrf_token() }}'
						    },
						    data: {
						    	username_email: $("#username_email").val(),
						    	password: $("#password").val()
						    },
						    success: function(data) {
						    	if(data == 200) {
						    		window.location.href = "{{ route('adminDashboard') }}"
						    	} else {
						    		$("#username_email").add("#password").val("")
						    		$("#invalidDetails").show()
						    		setTimeout(()=> {
										$(".card").effect("shake");
									}, 100);
									form.classList.add('was-validated');
						    	}
						    }
						})
						// alert("submitted")
					}
					form.classList.add('was-validated');
				}, false);
				});
		    }, false);
		})();
	</script>
</body>