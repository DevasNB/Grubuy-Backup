<?php
/*
//errors
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//access
$host = "localhost"; 
$user = "grubuy";
$password = "7O4@0XcY#9BXcYW*6jT%i!&5"; 
$database = "grubuy"; 

$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//acess to database

//mysql -u *user* -p
//show databases
//use grubuy
//show columns from users
//select * from users
*/
?>

<?php
class Database {

  protected function connect() {
    
    try {

      error_reporting(E_ALL);
      ini_set('display_errors', 'On');
      
      $username = "grubuy";
      $password = "7O4@0XcY#9BXcYW*6jT%i!&5";

      $conn = new PDO("mysql:host=localhost;dbname=grubuy", $username, $password);
      
      return $conn;
    } 
    catch(PDOException $e) {
      echo "<br>Connection failed: " . $e->getMessage(). "<br/>";
    }
  }

}

?>
