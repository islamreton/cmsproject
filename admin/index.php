<?php include "includes/admin_header.php" ?>

<div id="wrapper">

<!-- Navigation -->




<?php include "includes/admin_navigation.php" ?>










<div id="page-wrapper">



<div class="container-fluid">



<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Welcome to admin 
            <small> <?php echo $_SESSION['username'] ?>  </small>
        </h1>
       
    </div>
</div>
<!-- /.row -->

<!-- admin_widgets -->




       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                  <div class='huge'></div>
                  	
                  	<?php

                  	$query= "SELECT *FROM posts";
                  	$select_all_post=mysqli_query($connection,$query);
                  	$post_counts = mysqli_num_rows($select_all_post);

                  	echo "<div class='huge'>$post_counts</div> ";


                  	 ?>



      
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     
    	
                  	<?php

                  	$query= "SELECT *FROM comments";
                  	$select_all_comment=mysqli_query($connection,$query);
                  	$comment_counts = mysqli_num_rows($select_all_comment);

                  	echo "<div class='huge'>$comment_counts</div> ";


                  	 ?>






                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                  

                  	<?php

                  	$query= "SELECT *FROM users";
                  	$select_all_users=mysqli_query($connection,$query);
                  	$users_counts = mysqli_num_rows($select_all_users);

                  	echo "<div class='huge'>$users_counts</div> ";


                  	 ?>








                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        
                  	<?php

                  	$query= "SELECT *FROM categories";
                  	$select_all_categories=mysqli_query($connection,$query);
                  	$categories_counts = mysqli_num_rows($select_all_categories);

                  	echo "<div class='huge'>$categories_counts </div> ";


                  	 ?>











                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

   <!-- /.row -->




<div class="row">


 <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        ['Data', 'Counts'],


<?php 

$element_text=['Active Posts','Categories','Users','Comments'];

$element_count=[$post_counts,$categories_counts,$users_counts,$comment_counts];

for( $i = 0; $i < 4; $i++){

echo " [ ' {$element_text[$i]}'" . "," . " {$element_count[$i]}],";


}




?>








          // ['posts', 44],
       
        
        
         
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: '',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>





<div id="top_x_div" style="width: 'auto'; height: 600px;"></div>








</div>

















        
</div>
<!-- /.container-fluid -->

</div>






<!-- /#page-wrapper -->


<?php include "includes/admin_footer.php" ?>
