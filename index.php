<?php 
session_start();
?>
<html>
<head>
    <title>User Crud</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Add User</h1>
        <form action="add.php" class="form" role="form" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid email address" required="" placeholder="Enter Your Email Address"><?php if(isset($_SESSION['emailErr'])) echo $_SESSION['emailErr']?>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" pattern="[a-z A-Z]+" title="First name should contains only letters" required="" placeholder="Enter Your First Name"><?php if(isset($_SESSION['first_nameErr'])) echo $_SESSION['first_nameErr']?>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" pattern="[a-zA-Z]+" title="Last name should contains only letters" required="" placeholder="Enter Your Last Name"><?php if(isset($_SESSION['last_nameErr'])) echo $_SESSION['last_nameErr']?>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save</button> 
            </div>
        </form>
    </div>
</div>
</body>
</html>
