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
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form id="register_form">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted ">We'll never share your email id with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="password1">Password</label>
                        <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="password2">Re-enter Password</label>
                        <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="usertype">User Type</label>
                        <select name="usertype" class="form-control" id="usertype">
                            <option value="1">Admin</option>
                            <option value="2">Other</option>
                        </select>
                    </div>

                    <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
                    <span><a href="index.php">Login</a></span>
                </form>
            </div>
            <div class="card-footer text-muted">                
            </div>
        </div>
    </div> 
</body>
</html>