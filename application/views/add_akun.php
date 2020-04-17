<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
				
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('welcome/new') ?>" method="post">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="nama" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="">
						</div><div class="form-group">
							<label>Role</label>
							<select name="role" class="form-control">
								<option value="1">Admin</option>
								<option value="2">Autor</option>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-success" name="simpan">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>