<div class="products">
	<div class="container">
		<div class="row">
			<div class="col">
				
				<div class="product_grid">
				<?php 
					$sql = "select * from dienthoai";
					$data = mysqli_query($ketnoi,$sql);
					while($row = mysqli_fetch_array($data))
					{
				?>		
						<!-- Product -->
					<div class="product">
						<div class="product_image">
							<a href="product_detail.php?id_sanpham=<?php echo $row["MADT"] ?>"><img src="images/<?php echo $row["ANHBIA"] ?>" alt=""></a>
						</div>
						<div class="product_extra product_new"><a href="categories.html">New</a></div>
						<div class="product_content">
							<div class="product_title"><a href="product.html"><?php echo $row["TENDT"] ?></a></div>
							<div class="product_price"> <?php echo number_format($row["GIA"])  ?>   VNĐ</div>
						</div>
					</div>

				<?php
					}

				?>

				</div>
					
			</div>
		</div>
	</div>
</div>