<?PHP

class categoriesController extends Controller{

    public $controller;
    

function __construct(){
  echo 'fsdf';
   $this->controller=new Controller();
   $model=$this->controller->model_object->create_model('home');
  
   $d=$model->getAll($_POST);
   $this->controller->view_object->create_view('categories',$d);
  
}
function main(){
        
}
function show(){
   

}

function search(){

}


}
?>