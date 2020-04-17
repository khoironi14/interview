<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="<?php echo base_url('Welcome/new') ?>" class="btn btn-success">New</a>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Username</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($akun as $tampil) {
								# code...
							 ?>
							<tr>
								<td><?=$no++?></td>
								<td><?=$tampil->name?></td>
								<td><?=$tampil->username?></td>
								<td><a href="<?php echo base_url('welcome/edit_akun/'.$tampil->username.'') ?>" class="btn btn-info">Edit</a> <a href="<?php echo base_url('welcome/hapus_akun/'.$tampil->username.'') ?>" class="btn btn-info">Hapus</a></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>