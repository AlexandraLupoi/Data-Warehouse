<body>
	<?php include 'header.php';?>

	<div class="bestSellerContainer">
		<div class="titleContainer">
			<h4 style="text-align:center;">BEST SELLER</h4>
		</div>
		<br>
		<div class="row justify-content-between ml-5 mr-5">
			<?php
				$sql1 = "SELECT book_id, COUNT(book_id) as 'count' FROM orders GROUP BY book_id ORDER BY 'count' DESC LIMIT 4;";
				$result1 = mysqli_query($conn, $sql1);
				while($book = mysqli_fetch_array($result1)) {
					$id = $book['book_id'];
					
					$sql = "SELECT title, price, image FROM book WHERE book_id = $id;";
					$result = mysqli_query($conn, $sql);
					$value = mysqli_fetch_array($result);

					$image = $value['image'];
					$book = $value['title'];
					$price = $value['price'];

					echo '
						<form action="db/add_items.php" method="post">
							<div class="col-3">
								<div class="card">
									<img src="images/' . $image . '" alt="Book">
									<b><input type="hidden" name="book" value="' . $book . '">' . $book . '</input></b>
									<input type="hidden" name="price" value="' . $price . '" class="price">' . $price . '$</input>
									<button type="submit" id="addItem">Add to Cart</button>
								</div>
							</div>
						</form>
					';
				}
			?>
        </div>
	</div>
	<div class="newsContainer">
		<div class="titleContainer">
			<h4 style="text-align:center;">NEWS</h4>
		</div>
		<br>
		<div class="row justify-content-between ml-5 mr-5">
			<?php
				$sql = "SELECT title, price, image FROM book ORDER BY publisher_date DESC LIMIT 4;";
				$result = mysqli_query($conn, $sql);
				while($value = mysqli_fetch_array($result)) {
					$image = $value['image'];
					$book = $value['title'];
					$price = $value['price'];

					echo '
						<form action="db/add_items.php" method="post">
							<div class="col-3">
								<div class="card">
									<img src="images/' . $image . '" alt="Book">
									<b><input type="hidden" name="book" value="' . $book . '">' . $book . '</input></b>
									<input type="hidden" name="price" value="' . $price . '" class="price">' . $price . '$</input>
									<button type="submit" id="addItem">Add to Cart</button>
								</div>
							</div>
						</form>
					';
				}
			?>
        </div>
	</div>
</body>
