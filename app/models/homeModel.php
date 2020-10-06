<?PHP
class homeModel{
    function __construct(){
        $this->db=new DB();
    }
   
    function getAll(){
        $cols=array('ID','FIRSTNAME');
        $table=array('users');
        $tbl='hi';
        $tbl='hi';
      //  $tbl='hi';
      $cols=array('ID'=>17,"FIRSTNAME"=>"'duaa'",'USERNAME'=>"'mareb'", 'PASSWORD'=>"'mareb'");
      
        $data= $this->db->
        table($table)
        ->where('ID','=',17)
        ->delete()
        ->execute();
       // print_r($data.$row);
        return array('id'=>1,'name'=>'Hamas','address'=>'mareb');

    }

    function getproductDetails($id){

    }

}
?>