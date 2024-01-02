<?php

include('connect.php');
if (isset($_POST['create'])) {
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);

    $sql = "INSERT INTO users1 (user_name,password,gender,age,address,phone_number) VALUES ('" . $user_name . "', '" . $password . "', '" . $gender . "','" . $age . "','" . $address . "','" . $phone_number . "')";
    if (mysqli_query($db, $sql)) {
        echo "Record Inserted";
    } else {
        die("Something went wrong");
    }
}
$pic = "image22.jpg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<style>
    .btn1 {
        background-color: #04AA6D;
    }

    .button {
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    body {
        background-image: url("<?php echo $pic ?>");
        background-size: 100%;
    }
</style>

<body class="bg-dark text-light">

    <div class="container" style="max-width: auto;background-color:yellow;">

        <h1 class="text-center text-dark">User Management System</h1>



        <form action="index.php" method="POST" class="mb-3 text-dark">
            <div class="row">
                <input type="hidden" class="mb-2 rounded" name="user_id">
                <div class="col-4">
                    <label for="user_name">Username</label><br>
                    <input type="user_name" class="mb-2 rounded" name="user_name" placeholder="username" required>
                </div>

                <div class="col-4">
                    <label for="password">Password</label><br>
                    <input type="password" class="mb-2 rounded" name="password" placeholder="******" required>
                </div>
                <div class="col-4">
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" value="male" required>
                      <label for="male">Male</label>
                    <input type="radio" name="gender" value="female" required>
                      <label for="female">Female</label>
                </div>
            </div>
            <div class="row">
                <div class="col-4">

                    <label for="age"> Age</label><br>
                    <input type="text" class="mb-2 rounded" name="age" placeholder="0" required>
                </div>

                <div class="col-4">
                    <label for="address">Address</label><br>
                    <textarea name="address" class="mb-2 rounded" placeholder="Address"></textarea>
                </div>
                <div class="col-4">
                    <label for="phone_number">Phone Number</label><br>
                    <input type="text" class="mb-2 rounded" name="phone_number" placeholder="0" required>
                </div>
            </div>

            <div class="row">
                <div class="col-4"></div>
                <div class="col-1">
                    <button type="submit" name="create" class="btn btn-primary">Create</span></button>
                </div>
                <div class="col-2">
                    <button class="btn btn-danger">Cancel</button>
                </div>
                <div class="col-4"></div>
            </div>


        </form>



        <div class="text-dark">
            <h1 class="text-dark">User List</h1>
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>user_id</th>
                        <th>User_name</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Phone_number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('connect.php');
                    $sql = "SELECT * FROM users1";
                    $result = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['user_name']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td>
                                <a href="Edit.php?user_id=<?php echo $row['user_id'] ?>"> <button type="button" class="btn btn-warning pull-right" style="margin:3px;">
                                        Edit</button></a>
                                <a href="delete.php?user_id=<?php echo $row['user_id'] ?>"> <button type="button" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to delete?')" style="margin:3px;">
                                        Delete</button></a>
                            </td>


                        </tr>
                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </div>
    </div>
</body>

</html>