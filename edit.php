<?php


include 'vendor/autoload.php';
$users = (new Classes\User())->getAll();
$user=new Classes\User();
$email=$_GET['email'];


                          
                   



?>

<html>
<head>
    <title>User Crud Edit Panel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Edit User</h1>
       <?php $result=$user->edituser($email);
    if($result->num_rows>0)
         {
         while ($row=$result->fetch_assoc()) {

            ?>
        <form action="update.php " class="form" role="form" method="post">
                <input type="hidden" name="id" value="<?php echo$row['id'];?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid email address" required="">
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['first_name'];?>"
                pattern="[a-z A-Z]+" title="First name should contains only letters" required="">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $row['last_name'];?>" 
                pattern="[a-z A-Z]+" title="Last name should contains only letters" required="" >
            </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success">Save</button> 
            </div>
        </form>
        <?php } }?>
    </div>
</div>
</body>
</html>
