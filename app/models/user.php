<?PHP
class user{
    public $db;
    function __construct(){
        $this->$db=new DB();
    }
    function getQuery(){
        $this->db->select();
      //  return array('id'=>1,'name'=>'Hamas','address'=>'mareb');

    }

    function getproductDetails($id){

    }

}
?>