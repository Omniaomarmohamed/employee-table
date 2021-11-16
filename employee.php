<!-- ====================================== php valedation ==================================== -->
<?php
         $first_nameErr = $last_nameErr = $phoneErr = $emailErr =$basic_salaryErr= "";
         $frist_name =$last_name = $phone= $email =$basic_salary="";
         if (isset($_POST['submit'])) {
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["frist_name"])) {
              $first_nameErr = "Frist Name is required";
               
             
            }else {
              $frist_name= test_input($_POST["frist_name"]);
            }
            if (empty($_POST["last_name"])) {
              $last_nameErr = "Last Name is required";
             
            }else {
              $last_name= test_input($_POST["last_name"]);
            }
            if (empty($_POST["phone"])) {
              $phoneErr = "Phone is required";
              
            }else {
                $phone = test_input($_POST["phone"]);
            }
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
             
               
            }else {
               $email = test_input($_POST["email"]);
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            if (empty($_POST["basic_salary"])) {
              $basic_salaryErr = "Basic salary is required";
              
              
            }else {
                $basic_salary = test_input($_POST["basic_salary"]);
            }
            
         }

        }
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;

         }
        //============================ database conection =====================//
         if(isset($_POST['submit'])) {
          $frist_name = $_POST['frist_name']; 
          $last_name = $_POST['last_name']; 
          $phone = $_POST['phone']; 
          $email = $_POST['email'];
          $basic_salary=$_POST['basic_salary'];


      
          include_once("conf.php");
          $sql="select * from employees  where (email='$email');";

          $res=mysqli_query($mysqli,$sql);
    
          if (mysqli_num_rows($res) > 0) {
        
            $row = mysqli_fetch_assoc($res); 
            if($email==isset($row['email']))
            {
              ?>

              <p class="font-weight-bold text-white"> <?php echo "email already exists"; ?></p>
              <?php
            }
        }
        else{
          
          //===========================insert ================================//

          $result = mysqli_query($mysqli,"INSERT INTO employees (frist_name,last_name,phone,email,basic_salary)
           VALUES('$frist_name','$last_name','$phone','$email','$basic_salary')");// inputs value
           
          

          }
      
        }
        header("Location:CRUDws.php");
      ?>  