

		<div class="col-lg-4 col-xs-12 col-sm-12  col-md-4 my-5">
            <aside class=" agileits-w3ls-right-blog-con text-right">
                <div class="right-blog-info text-left">
                    <h4><strong>Categories</strong></h4>
                    <ul class="list-group single">
                       
                        <?php 
						$query = "select * from tbl_category";
						$category = $db->select($query);
						if($category) {
						while ($result = $category->fetch_assoc()) {
					
				?>
						<li class="list-group-item d-flex justify-content-between align-items-center"><a href="posts.php?category=<?php echo $result['id']; ?>"> <?php echo $result['name']; ?></a></li>
						<?php } } else {  ?> 
								<li>No Category Create</li>
						<?php } ?>	

                    </ul>
                </div>
            </aside>
            <h3 class="my-3">Stay Connected</h3>
            <!--Facebook-->
            <a href="#" class="fa fa-facebook " style=" width: 400px;"></a>
            <a href="#" class="fa fa-twitter pr-1" style=" width: 400px; "></a>
            <a href="#" class="fa fa-google" style=" width: 400px; "></a>
            <a href="#" class="fa fa-linkedin" style=" width: 400px; "></a>
            <a href="#" class="fa fa-youtube" style=" width: 400px; "></a>
            <a href="#" class="fa fa-instagram" style=" width: 400px; "></a>
            <a href="#" class="fa fa-pinterest" style=" width: 400px; "></a>

           
                <div class="tech-btm">
						<h2>Latest articles</h2>
						<?php 
							$query = "select * from tbl_post limit 5";
							$post = $db->select($query);
						if($post) {
						while ($result = $post->fetch_assoc()) {
							
						?>
							<div class="blog-grids row mb-3">
				                    <div class="col-md-5 blog-grid-left">
									<a href="post.php?id=<?php echo $result['id']; ?>"> <img class="img-thumbnail" alt="fantastic cms" src="admin/<?php echo $result['image']; ?>" alt="post image"/></a>
				                    </div>
				                    <div class="col-md-7 blog-grid-right">

				                        <h5>
				                            <a href="post.php?id=<?php echo $result['id']; ?>"> <?php echo $result['title']; ?></a>
				                            <?php echo $fm->textShorten($result['body'], 50); ?>
				                        </h5>
				                        <div class="sub-meta">
							<span>
							<i class="far fa-clock"></i> 2019-01-16</span>
				                        </div>
				                    </div>

                			</div>
					
	
			<?php }  } else { header("Location:404.php");} ?>
				</div>
			</div>







		