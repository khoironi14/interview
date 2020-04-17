<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
				
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('pos/new') ?>" method="post">
						<div class="form-group">
							<label>title</label>
							<input type="text" name="title" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Content</label>
							<textarea name="isi" class="form-control"></textarea>
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