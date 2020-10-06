<?PHP
class Controller{
   public $view_object;
    public $model_object;

    function __construct(){
       // echo 'gg';
       $this->model_object=new Model();
       $this->view_object=new View();

    }

}
?>