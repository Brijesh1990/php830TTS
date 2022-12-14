<?php 
require_once("model/model.php");
class controller extends model 
{
   public function __construct()
   {
    parent::__construct();
    // store data in contact table
      if(isset($_POST["contact-submit"]))
      {
          date_default_timezone_set("Asia/Calcutta");
          $fnm=$_POST["fname"];
          $lnm=$_POST["lname"];
          $em=$_POST["email"];
          $mob=$_POST["phone"];
          $msg=$_POST["message"];
          $rdatetime=date("d/m/Y H:i:s a");
          $data=array("text_firstname"=>$fnm,"text_lastname"=>$lnm,"text_email"=>$em,"text_mobile"=>$mob,"text_message"=>$msg,"text_datetime"=>$rdatetime);
          $chk=$this->insertalladata('tbl_contact',$data);
        
          if($chk)
          {
            echo "<script>
            alert('Thanks for contact with us Our one of Admin will contact with you Soon!')
            window.location='contactus';
            </script>";
          }
      } 
      // create account of customer or store data in tbl_customer
      if(isset($_POST["reg"]))
      {
        date_default_timezone_set("Asia/Calcutta");
        $fnm=$_POST["fname"];
        $lnm=$_POST["lname"];
        $em=$_POST["email"];
        $pass=base64_encode($_POST["pass"]);
        $cpass=base64_encode($_POST["cpass"]);
        $dob=$_POST["dob"];
        //upload photo here
        $tmp_name=$_FILES['img']["tmp_name"];
        $type=$_FILES["img"]["type"];
        $size=$_FILES["img"]["size"]/1024;
        $path="uploads/customers/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);
        $g=$_POST["gender"];
        $mob=$_POST["mobile"];
        $add=$_POST["address"];
        $state=$_POST["state"];
        $city=$_POST["city"];
        $rdatetime=date("d/m/Y H:i:s a");

        $data=array("text_firstname"=>$fnm,"text_lastname"=>$lnm,"text_email"=>$em,"text_password"=>$pass,"dob"=>$dob,"upload_photo"=>$path,"gender"=>$g,"text_phone"=>$mob,"text_address"=>$add,"sid"=>$state,"ctid"=>$city,"text_rdatetime"=>$rdatetime);
        if($pass==$cpass)
        {
        $chk=$this->insertalladata('tbl_customer',$data);
        if($chk)
        {
          echo "<script>
          alert('Thanks for Create your account with Us!')
          window.location='create-account';
          </script>";
        }
      }
      else 
      {
        echo "<script>
        alert('Ypur password does not matched try again')
        window.location='create-account';
        </script>";
      }
    }
    // login as customer 

     if(isset($_POST["log"]))
     {
     
      $em=$_POST["email"];
      $pass=base64_encode($_POST["pass"]);

      $chk=$this->logincustomer('tbl_customer',$em,$pass);
      if($chk)
      {
        echo "<script>
        alert('You are Logged In successfully!')
        window.location='./';
        </script>";
      }
      else 
      {
        echo "<script>
        alert('Your email and password does not matched try again!')
        window.location='./';
        </script>";
      }
     }
    // fetch a state in register form as dropdown data
     $st=$this->selectalldata('tbl_state');  
    // fetch a city in register form as dropdown data
    $ct=$this->selectalldata('tbl_city');  
    // forget password here
    if(isset($_POST["frg"]))
    {
      $em=$_POST["email"];
      $chk=$this->frgpassword('tbl_customer','text_password','text_email',$em);
      if($chk)
      {
        echo "<script>
        alert('Your password is :'+''+'$chk')
        window.location='./';
        </script>";
      }
      else 
      {
        echo "<script>
        alert('Your email does not registered with us try again')
        window.location='forgetpassword';
        </script>";
      }

    }

     // change password here
     if(isset($_POST["chang"]))
     {
       $customerid=$_SESSION["customer_id"];
       $opass=base64_encode($_POST["opass"]);
       $npass=base64_encode($_POST["npass"]);
       $cpass=base64_encode($_POST["cpass"]);
      
       $chk=$this->chngpassword('tbl_customer',$opass,$npass,$cpass,$customerid);

       if($chk)
       {
         echo "<script>
         alert('Your password successfully changed')
         window.location='./';
         </script>";
       }
       else 
       {
         echo "<script>
         alert('Your old password,new password and confirm password does not matched try again ')
         window.location='changepassword';
         </script>";
       }
 
     }
    //  manage your profile here
    if(isset($_SESSION["customer_id"]))
    {
      $customerid=$_SESSION["customer_id"];
      $showprof=$this->manageprofile('tbl_customer','tbl_state','tbl_city','tbl_customer.sid=tbl_state.sid','tbl_customer.ctid=tbl_city.ctid','customer_id',$customerid);
    }
    //  logout here
    if(isset($_GET["logout-here"]))
    {
      $lg=$_GET['logout-here'];
      $log=$this->logout();
      if($log)
      {
        echo "<script>
        alert('You are Logout successfully!')
        window.location='./';
        </script>";
      }
    }
    // load your views here using controller routing
    if(isset($_SERVER["PATH_INFO"]))
    {
      switch($_SERVER["PATH_INFO"])
      {
        case '/':
          require_once("index.php");
          require_once("header.php");
          require_once("navbar.php");
          require_once("slider.php");
          require_once("content.php");
          require_once("footer.php");
          require_once("login.php");
          break;
          case '/create-account':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("register.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/Womens-Products':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("womensproducts.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/viewcart':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("viewcart.php");
            require_once("footer.php");
            require_once("login.php");
            break;

          case '/contactus':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("contactus.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/manageprofile':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("manageprofile.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/notifications':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("notifications.php");
            require_once("footer.php");
            require_once("login.php");
            break;
          case '/myorders':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("myorders.php");
            require_once("footer.php");
            require_once("login.php");
            break;

          case '/changepassword':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("changepassword.php");
            require_once("footer.php");
            require_once("login.php");
            break;

            
          case '/forgetpassword':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("forgetpassword.php");
            require_once("footer.php");
            require_once("login.php");
            break;

        default:
        require_once("index.php");
        require_once("header.php");
        require_once("navbar.php");
        require_once("404.php");
        require_once("footer.php");
        break;
      }
    }
   }
}
$obj=new controller;
?>