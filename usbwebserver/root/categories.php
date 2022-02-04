<body>
    <?php
        include_once 'db/connection.php';

        $category = $_POST['category'];
    ?>
    <div class="container category" style="color: black; margin: 30px 270px;">
        <?php
            echo '<h4 class="text-center mb-4">' . $category . '</h4>';
        ?>
        <div class="row justify-content-between" style="margin-top: 100px;">
            <?php
                $sql = "SELECT title, price, image FROM book INNER JOIN book_genre ON book.book_id = book_genre.book_id INNER JOIN genre ON book_genre.genre_id = genre.genre_id WHERE genre.genre = '$category';";
                $result = mysqli_query($conn, $sql);
                while($value = mysqli_fetch_array($result)) {
                    $book = $value['title'];
                    $price = $value['price'];
                    $image = $value['image'];

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
