<?php
require_once('connection.php');
session_start();

if(isset($_POST['email']))
	{
		if(empty($_POST['email']) || empty($_POST['password']))
		{
            $res = array("msg" => "Please fill all fields");
            echo json_encode($res);
		}
		else
		{
			$query="select * from users where email='".$_POST['email']."' && password='".$_POST['password']."'";
			$result=mysqli_query($conn,$query);

			if (mysqli_fetch_assoc($result)) 
			{
				$_SESSION['loggedin']=true;
				$res = array("msg" => "Logged In");
                echo json_encode($res);
                header("location:index.php");
				# code...
			}
			else
			{
				header("location:login.html");
				echo '<script> alert("log in Incorrect")</script>';
			}
		}
	}
	else
    {
        echo "no connection";
    }
?>