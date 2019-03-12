<?php include("includes/header.php"); ?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->

    <?php include("includes/top-nav.php"); ?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

    <?php include("includes/side-nav.php"); ?>
    
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin
                    <small>Subheading</small>
                </h1>
                <?php

                $found_user = User::find_user_by_id(2);


                $user = new User();

                $user->id = $found_user['id'];
                $user->username = $found_user['username'];
                $user->first_name = $found_user['first_name'];
                $user->last_name = $found_user['last_name'];
                $user->password = $found_user['password'];

                echo $user->first_name;



                
                ?>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>