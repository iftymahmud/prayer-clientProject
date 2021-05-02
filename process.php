<?php 
require_once "db/config.php";

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
        
        
       $Text ='Sent From: ' . $Email; 

       $Msg = $UserName . ' says : ' . $Msg;
        
        
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "iftymahmud123@gmail.com";

           if(mail($to,$Subject,$Msg,$Text))
           {
               header("location:index.php?success");
           }
           
           $sql = "INSERT INTO prayer (`name`, `email`, `topic`) VALUES ('$UserName', '$Email', '$Subject')";

           if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }


       }
    }
    else
    {
        header("location:index.php");
    }





?>