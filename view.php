<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha38-GLhlTQ8iRABdZLl603oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Records</title>
    </head>

    <body>
    <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
        <div class="bg-white p-4 w-50 rounded">
            <a href="create.php" class="btn btn-success">Add +</a>
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    <?php
                        include('dbconnection.php');
                        $fetch = mysqli_query($con, "select * from crudoperations");
                        $row = mysqli_num_rows($fetch);

                        if($row > 0){
                            while($r = mysqli_fetch_array($fetch)){
                        ?>
                        <tr>
                            <td><?php echo $r['Name'] ?></td>
                            <td><?php echo $r['Email'] ?></td>
                            <td><?php echo $r['Address'] ?></td>
                            <!-- <td><button class="btn btn-sm btn-info">Update</button>
                            <button class="btn btn-sm btn-danger">Delete</button></td> -->
                            <td><a href="update.php?id= <?php echo $r['ID'] ?>" class="btn btn-sm btn-info">Update</a>
                            <a href="delete.php?delid= <?php echo $r['ID'] ?>" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    </body>
</html>