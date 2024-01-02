<<?php
    include('connect.php');
    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM users1 WHERE user_id='$user_id'";


    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $pic = "image.jpg";
    ?> <!DOCTYPE html>
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

    <body class="bg-secondary">

        <div class="container" style="max-width: auto;background-color:grey;">

            <h1 class="text-center text-light">User Managemet System</h1>



            <form action="update.php" method="POST" class="mb-3 text-light">
                <div class="row">
                    <input type="hidden" name="user_id" value="<?php echo $row["user_id"] ?>">
                    <div class="col-4">
                        <label for="user_name">Username</label><br>
                        <input type="user_name" class="mb-2 rounded" name="user_name" id="user_name" value="<?php echo $row["user_name"] ?>">
                    </div>

                    <div class="col-4">
                        <label for="password">Password</label><br>
                        <input type="password" class="mb-2 rounded" name="password" id="password" value="<?php echo $row['password'] ?>">
                    </div>
                    <div class="col-4">
                        <label for="gender">Gender</label><br>
                        <input type="radio" id="" name="gender" value="male">
                          <label for="male">Male</label>
                        <input type="radio" id="" name="gender" value="female">
                          <label for="female">Female</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">

                        <label for="age"> Age</label><br>
                        <input type="text" class="mb-2 rounded" name="age" id="age" value="<?php echo $row['age'] ?>">
                    </div>

                    <div class="col-4">
                        <label for="address">Address</label><br>
                        <input type="address" name="address" class="mb-2 rounded" id="address" value="<?php echo $row['address'] ?>">
                    </div>
                    <div class="col-4">
                        <label for="phone_number">Phone Number</label><br>
                        <input type="text" class="mb-2 rounded" name="phone_number" id="phone_number" value="<?php echo $row['phone_number'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1">
                        <button type="submit" name="update" class="btn btn-primary">Update</span></button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-danger"> Cancel</button>
                    </div>
                    <div class="col-4"></div>
                </div>


            </form>




        </div>
    </body>

    </html>