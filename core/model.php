<?PHP
class Model{
    function  create_model($model_name){

        require_once("app/models/".$model_name."Model.php");
        $requestedModel=$model_name."Model";

        return new $requestedModel();





    }

}
?>