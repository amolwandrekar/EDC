<?
session_start();

//For debugging
//error_reporting(E_ALL);
ini_set('display_errors', '0');

//root folder as seen by server
$DocRoot="/var/www/devices and circuits/";

//root folder as seen by browser
$WebRoot="/var/www/devices and circuits/";

//absolute URL to root
$URLRoot="http://localhost/";

//current location relative to DocRoot
$Path=$_SERVER['PHP_SELF'];

//macros
$header=$DocRoot."header.php";
//$banner=$DocRoot."banner.php";
$menu=$DocRoot."menu.php";
//$context_menu="context_menu.php";
$sidebar=$DocRoot."sidebar.php";
$footer=$DocRoot."footer.php";
$script=$WebRoot."main.js";
$style=$WebRoot."style.css";

//counter
//include $DocRoot."count.php";

//password salt!
//$salt="l958k7j987b93j7'x293j4860b'2j4026j0x2j8670209487'b";

//database connection
//try {
//  $conn = new PDO('mysql:host=localhost;dbname=vil', "root","");
//}
//catch (Exception $e) {
//  die("Unable to connect to database: " . $e->getMessage());
//}

//allow some pages without login
//$no_login = array($WebRoot."index.php",$WebRoot."user/signup.php",$WebRoot."user/confirm.php",$WebRoot."user/login.php",$WebRoot."user/logout.php",$WebRoot."user/require_login.php");
//if(!in_array($Path, $no_login) && !isset($_SESSION['username'])){
 
 //force login for everybody else:
//  header("Location: ".$URLRoot."user/require_login.php");
 
 exit();
}

?>
