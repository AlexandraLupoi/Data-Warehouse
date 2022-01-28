<<<<<<< Updated upstream
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>DataWarehuse</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
=======
<html>
<head>
	<?php include 'header.php';?>
	<style><?php include 'style.css';?></style>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
>>>>>>> Stashed changes
</head>

<body>
<<<<<<< Updated upstream
	<div id="container">
		
=======
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
>>>>>>> Stashed changes
	</div>
</body>
</html>

<script>
	$('#exampleModal').on('shown.bs.modal', function () {
  $('#exampleModal').trigger('focus')
})
</script>