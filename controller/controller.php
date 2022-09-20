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
        $mob=$_POST["mobile"];
        $add=$_POST["address"];
        $rdatetime=date("d/m/Y H:i:s a");
        $data=array("text_firstname"=>$fnm,"text_lastname"=>$lnm,"text_email"=>$em,"text_password"=>$pass,"text_phone"=>$mob,"text_address"=>$add,"text_rdatetime"=>$rdatetime);
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