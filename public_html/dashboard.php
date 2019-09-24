<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jQuery first -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- My own javascript file -->
    <script type="text/javascript" src="./js/main.js"></script>

    <title> Inventory Management System</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include_once("./templates/header.php"); ?>
    <br/><br/>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto">
                    <img class="card-img-top mx-auto" style="width: 60%;" src="./images/user.png">
                    <div class="card-body">
                        <h5 class="card-title">Profile Information</h5>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Your Name</p>
                        <p class="card-text"><i class="fa fa-id-badge">&nbsp;</i>Admin</p>
                        <p class="card-text"><i class="fa fa-calendar">&nbsp;</i>Last Login : xxxx-xx-xx </p>
                        <a href="#" class="btn btn-primary"> <i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="jumbotron" style="width:100%; height:100%;">
                    <h1>Welcome Admin,</h1>
                    <div class="row">
                        <div class="col-sm-6"> 
                            <iframe src="http://free.timeanddate.com/clock/i6y8ackp/n438/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
                        </div>
                        <div class="col-sm-6"> 
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">New Orders</h5>
                                    <p class="card-text">Here you can make invoices and new orders</p>
                                    <a href="#" class="btn btn-primary">New Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p><p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <p class="card-text">Here you can manage item categories and you can add new parent and sub categories</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_AddCategory">Add</a>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Brands</h5>
                        <p class="card-text">Here you can manage brands and you can add new brands</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_AddBrand">Add</a>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">Here you can manage products and you can add new products</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_AddProduct">Add</a>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Add Category Form  -->
    <?php include_once("./templates/category_add.php"); ?> 

    <!-- Add Brand Form  -->
    <?php include_once("./templates/brand_add.php"); ?> 

    <!-- Add Products Form  -->
    <?php include_once("./templates/product_add.php"); ?> 
</body>
</html>