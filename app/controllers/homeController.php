<?PHP

class homeController extends Controller{

    public $controller;
    public $db;
    

function __construct(){
    $this->db=new DB();
    $this->controller=new Controller();
    $model=$this->controller->model_object->create_model('home');
    $d=$model->getAll();
    $this->controller->view_object->create_view('home',$d);
   
}
function main(){
        
}
function show(){
   

}

function search(){

}


}
?>