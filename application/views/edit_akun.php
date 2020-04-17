<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
				
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('welcome/edit_akun') ?>" method="post">
						<input type="hidden" name="user" value="<?=$edit['username']?>">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="nama" value="<?=$edit['name']?>" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" value="<?=$edit['username']?>" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Role</label>
							<select name="role" class="form-control">
								<option value="1" <?php if ($edit['role']==1) {
									echo "selected";
								} ?>>Admin</option>
								<option value="2" <?php if ($edit['role']==2) {
									echo "selected";
								} ?>>Autor</option>
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