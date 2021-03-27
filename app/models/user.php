<?PHP
class user{
    public $db;
    function __construct(){
        $this->$db=new DB();
    }
    function getQuery(){
        $query=>$this->db->columns()->from()->where()->build();
        $newdata=$query->execute()
      //  return array('id'=>1,'name'=>'Hamas','address'=>'mareb');

    }

    function getproductDetails($id){

    }

}
?>