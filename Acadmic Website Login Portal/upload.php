<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Upload PDF</title>
    <style>
        body {
            background-color: #f9f9f9;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .nav-link {
            color: #ffffff;
        }

        .btn-logout {
            color: #ffffff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-logout:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" >NAAC's Documents</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://naac.gov.in/index.php/en/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn-logout">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class='alert alert-secondary' role='alert'>
        <h4 class='text-center'>Upload PDF</h4>
    </div>

    <div class="container col-12 m-5">
         <?php
        $servername = "localhost";
        $username = "root";
        $passowrd = "";
        $db_name = "documents";

        $con= mysqli_connect("localhost","root","","documents");

        $numb = "Select COUNT(*) from image";
        $pres = mysqli_query($con, $numb);
        $res = mysqli_fetch_assoc($pres);
        $arr = array();
        $arr = $res;
        $val = implode("",$arr);
        $val = (int) $val;
        if(isset($_POST['btn_img']))
        {
                    
       
        

        # geting the data

        $filename = $_FILES["choosefile"]["name"];
        $tempfile = $_FILES["choosefile"]["tmp_name"];
        $folder = "image/".$filename;

        # geting value

        $sql = "INSERT INTO image( id,images) VALUES( $val, '$filename')";
        //$sql3 = "update TABLE IMAGE SET id = $val where images = $filename";
        //$resi = mysqli_query($con, $sql3);
        
        if($filename == "")
        {
            echo
            "
            <div class='alert alert-danger' role='alert'>
                <h4 class='text-center'>Blank not allowed</h4>
            </div>
            ";
        }else{
            $result = mysqli_query($con, $sql);
            move_uploaded_file($tempfile, $folder);
            echo
            "
            <div class='alert alert-success' role='alert'>
                <h4 class='text-center'>PDF Uploaded</h4>
            </div>
            ";
        }
       }
        ?>

    <form action="upload.php" method="post" class="form-control" enctype="multipart/form-data">
        <input type="file" class = "form-control"name="choosefile" id="">
        
    <div class="col-6 m-auto ">
        <button type="submit" name="btn_img" class="btn btn-outline-success m-4">
            Submit
        </button>
        </div>
    </form>
    <table class = "table text-center">
        <tr>
            <th>id</th>
            <th>PDF Files</th>
            <th>Delete</th>
        </tr>

        <?php
        $con2 = mysqli_connect("localhost","root","","documents");
        $sql2 = "SELECT*FROM image WHERE 1";
        $result2 = mysqli_query($con2, $sql2);
        while($fetch = mysqli_fetch_assoc($result2))
        {
            echo"";
            ?>

            <tr>
                <td><?php echo $fetch['id'] ?></td>
                <td><a href="./image/<?php echo $fetch['images']?>" width = 100px> <?php echo $fetch['images'] ?></td>
                <td><a href="delete.php?id=<?php echo $fetch['id'] ?>" class ="btn btn-outline-danger">Delete</a></td>
            </tr>

            <?php
            "";
        }
        ?>
    </table>
</body>

</html>
