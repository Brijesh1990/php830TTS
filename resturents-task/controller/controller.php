<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();

        // load your ui or design here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;
                case '/login':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;
                case '/register':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                  default:
                  require_once("index.php");
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