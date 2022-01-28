<body>
	<?php include 'header.php';?>

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
			</div>
		</div>
	</div>
	<div class="bestSellerContainer" style="margin-bottom:80px;">
		<div class="titleContainer">
			<h2 style="text-align:center;">BEST SELLER</h2>
		</div>
		<br>
		<div class="row justify-content-md-center">
			<div class="col col-lg-2">
				<div class="imageBook">
				Photo 1
				</div>
			</div>
			<div class="col col-lg-2">Photo 2</div>
			<div class="col col-lg-2">Photo 3</div>
			<div class="col col-lg-2">Photo 4</div>
		</div>
		<div class="row justify-content-md-center">
			<div style="height: 120px;" class="col col-lg-2">Description 1</div>
			<div style="height: 120px;" class="col col-lg-2">Description 2</div>
			<div style="height: 120px;" class="col col-lg-2">Description 3</div>
			<div style="height: 120px;" class="col col-lg-2">Description 4</div>
		</div>
	</div>
	<div class="newsContainer">
		<div class="titleContainer">
			<h2 style="text-align:center;">NEWS</h2>
		</div>
		<br>
		<div class="row justify-content-md-center">
			<div class="col col-lg-2">
				<div class="imageBook">
				Photo 1
				</div>
			</div>
			<div class="col col-lg-2">Photo 2</div>
			<div class="col col-lg-2">Photo 3</div>
			<div class="col col-lg-2">Photo 4</div>
		</div>
	</div>
	</body>

<script>
	$('#exampleModal').on('shown.bs.modal', function () {
		$('#exampleModal').trigger('focus')
	})
</script>