<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>


<body class="text-capitalize text-white" style="background-color: #101d3d;">

<?php
    include_once("conf.php");
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($mysqli, $sql) or die( mysqli_error($mysqli));
    $date = new DateTime();
    $time = $date->getTimezone();
?>

<div class="container-fluid">

<section class="py-4">  
<h1 data-aos="fade-down" class="text-danger py-5 text-capitalize">employees: </h1>


        <table class=" table  text-center">
        <thead>
        <th class="text-capitalize text-white">id</th>
        <th class="text-capitalize text-white">frist_name</th> 
        <th class="text-capitalize text-white">last_name</th> 
        <th class="text-capitalize text-white">Phone</th>
        <th class="text-capitalize text-white">email</th>
        <th class="text-capitalize text-white">basic_salary</th>
        <th class="text-capitalize text-white">Delete employee</th>
        
        
        
        </thead>
        <?php
            while($user_data = mysqli_fetch_array($result)) {
                
                echo " <tbody>";
                echo "<td class='text-capitalize text-white'>".$user_data['id']."</td>";
                echo "<td class='text-capitalize text-white'>".$user_data['frist_name']."</td>";
                echo "<td class='text-capitalize text-white'>".$user_data['last_name']."</td>";
                echo "<td class='text-capitalize text-white'>".$user_data['phone']."</td>";
                echo "<td class='text-capitalize text-white'>".$user_data['email']."</td>";
                echo "<td class='text-capitalize text-white'>".$user_data['basic_salary']."</td>";
                echo "<td><a class='btn btn-danger' href='delete.php?id=$user_data[id]'>Delete</a> </td>";
                 echo " </tbody>";
              
  }
        ?>       
    
    </table>
    <div class=" my-2">
    <a href="form.php">
    <button class="btn btn-danger text-capitalize" name="submit" type="submit">back to form</button>
    </a>
    
</div>
</section>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="scripts/js/all.min.js"></script>
    <script src="scripts/aos-master/dist/aos.js"></script>
    <script src="scripts/js/main.js"></script>
</body>
</html>