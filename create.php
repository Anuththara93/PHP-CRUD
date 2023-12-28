<?php
    include('dbconnection.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = mysqli_query($con, "insert into crudoperations (Name, Email, Address) value ('$name', '$email', '$address')");

        if($query){
            echo "<script>alert('Successfully created record')</script>";
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
        <title>Create User</title>
    </head>

    <body>
        <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
            <div class="bg-white w-25 rounded p-3">
                <h2>Fill Form</h2>
                <form method="POST">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"/>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="email" placeholder="Enter Email"/>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="address" placeholder="Enter Address"/>
                    </div>
                    <button class="btn btn-success" type="submit">Create</button>
                </form>
            </div>
        </div>
    </body>
</html>