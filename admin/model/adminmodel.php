<?php 
class adminmodel 
{
    public $connection="";
    public function __construct()
    {
     
            // database connections
            try 
            {
                $this->connection=new mysqli("localhost","root","","sharddha-app");
                if($this->connection)
                {
                    echo "<div class='alert alert-success mx-auto text-center col-md-6 mt-4'>connection successfully</div>";
                } 
            }
            catch(Exception $e)
            {
            //   print("Database is nor connected".$e);
            echo "<div class='alert alert-danger mx-auto text-center col-md-6 mt-4'>Somthing went wrong connection not stablished</div>";
            }
    }
}
?>