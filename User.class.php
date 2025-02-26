<?php
require "db.php";
class User{
$db
private $table="users";

//create
function __construct(){

}//end constructor
//read
public function getAllUsers(){
$sql="SELECT * FROM $TABLE";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) >0){
while($row=mysqli_fetch_assoc($result)){
echo $row["id"] ."<br>";
echo $row["username"] . "<br>";
echo $row["email"] . "<br>";
}
else{
echo "No user found";
}
}//end func

//update

//destroy

}//end class
mysqli_close($conn);
?>