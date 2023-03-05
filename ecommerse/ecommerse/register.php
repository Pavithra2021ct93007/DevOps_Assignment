<?php 
	//include "login.php";
	// REGISTER USER
	
    $username="root";//change username 
	$password="root"; //change password
	$host="localhost:3307";
	$db_name="ecommerse"; //change databasename
	

	$connect=mysqli_connect($host,$username,$password,$db_name);
	

	if(!$connect)
	{
		echo json_encode("Connection Failed");
	}else{
		echo json_encode("Connected");
	}
	  if((isset($_POST['email'])) && (isset($_POST['password']))){
	   $email =  $_POST['email'];
	   $password = $_POST['password'];
	   $query = "INSERT INTO login VALUES('".$email."','".$password."')";
	   $results = mysqli_query($connect, $query);
	  
	   echo "records are inserted";
	   if($results)
	   {
		   echo "user Logged in successfully";
		   echo json_encode("success");
	   }else{
		   echo json_encode("Error");
	   }
	  }else{
		echo "nothing happened";
	  }
	//  $sql = "SELECT * FROM login WHERE email = '$email'";
       //building SQL query
    //   $res = mysqli_query($connect, $sql);
    //   $numrows = mysqli_num_rows($res);
       //check if there is any row
     //  if($numrows > 0){
           //is there is any data with that username
       //    $obj = mysqli_fetch_object($res);
           //get row as object
      //     if(md5($password) == $obj->password){
       //        $return["success"] = true;
              
       //    }else{
       //        $return["error"] = true;
      //         $return["message"] = "Your Password is Incorrect.";
     //      }
     //  }else{
      //     $return["error"] = true;
      //     $return["message"] = 'No username found.';
      // }
	// } else{
     // $return["error"] = true;
      $return["message"] = 'Send all parameters.';
 // }


  mysqli_close($connect);

  header('Content-Type: application/json');
  // tell browser that its a json data
  echo json_encode($return);
  //converting array to JSON string
	 
	   
        
        ?>