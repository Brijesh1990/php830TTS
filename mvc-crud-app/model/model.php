<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
        session_start();
        // database connections
        try 
        {
            $this->connection=new mysqli("localhost","root","","sharddha-app");
            if($this->connection)
            {
                // echo "<div class='alert alert-success mx-auto text-center col-md-6 mt-4'>connection successfully</div>";
            } 
        }
        catch(Exception $e)
        {
            echo "<div class='alert alert-danger mx-auto text-center col-md-6 mt-4'>Somthing went wrong connection not stablished</div>";
        
        }
    }

    // create a member function for insert alldata
    public function insertalladata($table,$data)
    {
         $key=array_keys($data);
         //print_r($key);
         $key1=implode(",",$key);
         //print_r($key1);
         $value=array_values($data);
        //print_r($value);
         $value1=implode("','",$value);
         //print_r($value1)
        //  echo $insert="insert into $table($key1) values('$value1')"; exit();
         $insert="insert into $table($key1) values('$value1')";
         
        // insert into tbl_contact(text_firstname,text_lastname,text_email,text_mobile,text_message,text_datetime) values('hitesh','joshi','hitesh@gmail.com','9998003879','hi','20/09/2022 09:28:27 am')
        
         $exe=mysqli_query($this->connection,$insert);
         return $exe;
    }

    //create a member function for login as customer

     public function logincustomer($table,$em,$pass)
     {
        $sel="select * from $table where text_email='$em' and text_password='$pass'";
        $exe=mysqli_query($this->connection,$sel);
        $fetch=mysqli_fetch_array($exe);
        $num_rows=mysqli_num_rows($exe);
        if($num_rows==1)
        {
            
           $_SESSION['customer_id']=$fetch["customer_id"];
           $_SESSION['fname']=$fetch["text_firstname"];
           $_SESSION['email']=$fetch["text_email"];
           return true;
        }
        else 
        {
          return false;
        }

     }
    // create a member function logout 

    public function logout()
    {
        unset($_SESSION['customer_id']);
        unset($_SESSION['fname']);
        unset($_SESSION['email']);
        session_destroy();
        return true;
        
    }
}
?>