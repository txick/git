
<?php include 'inc/header.php'; ?>
<?php include 'inc/slider.php'; ?>
<div class="container-fluid">
	<?php
	$per_page = 5 ;
	if (isset($_GET["page"])){
		$page = $_GET["page"];
	}else{
		$page=1;

}
	$start_form = ($page-1) * $per_page;
?>


    <div class="row">
        <div class="col-lg-8  col-xs-12 col-sm-12  col-md-8 my-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
<!--            <h1 class="my-4">Welcome to Modern Business</h1>-->

            <!-- Marketing Icons Section -->

                <!-- Section: Blog v.2 -->
            <section class="text-center">

                                                <!-- Section heading -->
                                                <h2 class="h1-responsive font-weight-bold my-1">Recent posts</h2>
                                                <!-- Section description -->

                                        <!-- Grid row -->
                                                <div class="row">
                                                    <?php
                                $query = "select * from tbl_post limit $start_form, $per_page";
                                $post = $db->select($query);
                                if ($post) {
                                    while ($result = $post->fetch_assoc()) { ?>
                                                    <!-- Grid column -->
                                                    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

                                                        <!-- Featured image -->
                                                        <div class="view overlay rounded z-depth-2 mb-4">
                                                            <img class="img-fluid" src="admin/<?php echo $result['image']; ?>" alt="Sample image">
                                                            <a>
                                                                <div class="mask rgba-white-slight"></div>
                                                            </a>
                                                        </div>

                                                        <!-- Category -->
                                                        <a href="#!" class="pink-text">
                                                            <h6 class="font-weight-bold mb-3"><i class="fas fa-map pr-2"></i>Adventure</h6>
                                                        </a>
                                                        <!-- Post title -->
                                                        <h4 class="font-weight-bold mb-3"><a href="post.php?id=<?php echo $result['id']; ?>"> <strong><?php echo $result['title']; ?></strong></h4>
                                                        <!-- Post data -->
                                                        <p>by <a class="font-weight-bold">Billy Forester</a>, 15Recent posts/07/2018</p>
                                                        <!-- Excerpt -->
                                                       <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                                    quo minus id quod maxime placeat facere possimus voluptas.</p>
                                                        <!-- Read more button -->
                                                        <a class="btn btn-pink btn-rounded btn-md">Read more</a>

                                                    </div>
                                              <?php } ?>
                                                    <!-- Grid column -->

                                                    <!-- Grid column -->

                                                <!-- Grid row -->

            </section>
                <!-- Section: Blog v.2 -->

        </div>


<?php include 'inc/sidebar.php'; ?>		
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center my-2" style="align-items: center;">
        <?php
        $query = "select * from tbl_post ";
        $result = $db->select($query);
        $total_rows = mysqli_num_rows($result);
        $total_pages = ceil($total_rows/$per_page);

        echo "<span class='pagination'><a href='index.php?page=1'>".'Last Page'."</a>";
        for ($i=1; $i <= $total_pages; $i++){
            echo "<a href='index.php?page=".$i."'>".$i."</a>";
        };
        echo "<a href='index.php?page=$total_pages'>".'First Page'."</a></span>"?>
        <!--- pageination-->

        <?php } else { header("Location:404.php");} ?>
    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>		
	