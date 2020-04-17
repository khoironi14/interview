<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="<?php echo base_url('pos/new') ?>" class="btn btn-success">New</a>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Content</th>
								<th>Date</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($post as $tampil) {
								# code...
							 ?>
							<tr>
								<td><?=$no++?></td>
								<td><?=$tampil->title?></td>
								<td><?=$tampil->content?></td>
								<td><?=$tampil->date?></td>
								<td><?=$tampil->username?></td>
								
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>