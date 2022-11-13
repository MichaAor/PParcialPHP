<body>
	<form class="was-validated" method="post" action="<?php echo FRONT_ROOT."/Home/Login" ?>">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control" name="email"	id="exampleInputEmail1" required>
			<div class="invalid-feedback">
				Please enter a email.
			</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" class="form-control"  name="password" id="exampleInputPassword1" required>
			<div class="invalid-feedback">
				Please enter a password.
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>