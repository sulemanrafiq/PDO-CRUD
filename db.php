<?Php 
 $dsn = 'mysql:host=localhost;dbname=crud';
 $username ='root';
 $password ='';
 $options =[];
 try{
      $connection = new PDO ($dsn,$username,$password,$options);
      
 }
 catch (PDOException $e){
log_message('error: ',$e->getMessage());
        return;

 }


?>
