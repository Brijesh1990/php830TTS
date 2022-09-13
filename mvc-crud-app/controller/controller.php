<?php 
require_once("model/model.php");
class controller extends model 
{
   public function __construct()
   {
    parent::__construct();
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