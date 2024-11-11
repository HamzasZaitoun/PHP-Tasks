<?php
include('connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
</head>
<body>


<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user-secret"></i> My Profile</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>

<!-- /Header -->

<!-- Main -->

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        <!--<li class="nav-header"></li>-->
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#"><i class="fa fa-tags"></i> Users</a></li>
        <li><a href="#"><i class="fa fa-history"></i> Items</a></li>
        <li><a href="#"><i class="fa fa-lock"></i> Categories</a></li>

    </ul>
</div><!-- /span-3 -->
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->
 
    <strong><span class="fa fa-dashboard"></span> My Dashboard</strong>
    <hr>
    <table class="table table-bordered table-striped">
                    <thead class="table-dark ">
                        <tr >
                            <th class="text-center">user ID</th>
                            <th class="text-center"> user first name </th>
                            <th class="text-center">user last name</th>
                            <th class="text-center">user Email</th>
                            <th class="text-center">user mobile number</th>
                            <th class="text-center">user Address</th>
                        </tr>
                    </thead>
                    <tbody id="orderTable" class="text-center">
                   <?php
                   $query = "SELECT
                   user_id, user_first_name, 
                   user_last_name,
                   user_email,
                   user_mobile
                   from users
                  

                   ";

                   $stmt = $conn->prepare($query);
                   $stmt->execute();
                   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                   foreach ($result as $row) {
                       echo "<tr>";
                       echo "<td>" . $row['user_id'] . "</td>"; 
                       echo "<td>" . $row['user_first_name'] . "</td>";
                       echo "<td>" . $row['user_last_name'] . "</td>";
                       echo "<td>" . $row['user_email'] . "</td>";
                       echo "<td>" . $row['user_mobile'] . "</td>";
                       echo "<td><button class='btn btn-dark'>Edit</button> <button class='btn btn-danger'>Delete</button></td>";
                       echo "</tr>";}
                   ?>
                    </tbody>

                </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>