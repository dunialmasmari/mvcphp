<?PHP
include("core/route.php");
include("core/controller.php");
include("core/db.php");
include("core/session.php");
include("core/view.php");
include("core/model.php");
$url=isset($_GET['url'])?$_GET['url']:"home";
new Route($url);
?>