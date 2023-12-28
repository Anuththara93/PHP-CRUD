<?php
    include('dbconnection.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = mysqli_query($con, "update crudoperations set Name='$name', Email='$email', Address='$address' where Id='$id'");

        if($query){
            echo "<script>alert('Data updated successfully')</script>";
            echo "<script type='text/javascript'>document.location = 'view.php';</script>";
        }
        else{
            echo "<script>alert('There is an error')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha38-GLhlTQ8iRABdZLl603oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Update User</title>
    </head>

    <body>
        <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
            <div class="bg-white w-25 rounded p-3">
                <h2>Update</h2>
                <form method="POST">
                    <?php 
                        //include('dbconnection.php');
                        $id = $_GET['id'];
                        $query = mysqli_query($con, "select * from crudoperations where ID = '$id'");

                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <div class="mb-2">
                        <input type="text" class="form-control" value="<?php echo $row['Name'] ?>" name="name" placeholder="Enter Name"/>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" value="<?php echo $row['Email'] ?>" name="email" placeholder="Enter Email"/>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" value="<?php echo $row['Address'] ?>" name="address" placeholder="Enter Address"/>
                    </div>
                    <?php } ?>
                    <button class="btn btn-success" type="submit">Update</button>
                </form>
            </div>
        </div>
    </body>
</html>