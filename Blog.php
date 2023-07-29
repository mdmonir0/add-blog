<?php 


class Blog{
function dbConnect(){
    $link = mysqli_connect('localhost','root','','blog1');
    return $link;
}
    function addBlog(){

       $filename = $_FILES['image']['name'];
       $directory = 'image';
       $imageUrl = $filename.$directory;
       move_uploaded_file($_FILES['image']['name'],$imageUrl);

       $time = date("Y-m-d H:i:s");

        $sql = "INSERT INTO blog (title,description,author,image,status,timestamp) VALUES('$_POST[title]','$_POST[description]','$_POST[author]',$imageUrl,'$_POST[status]',timestamp='$time')";
        
        if(mysqli_query($this->dbConnect(),$sql)){
            echo 'success';
        } else {
            die(mysqli_error($this->dbConnect()));
        }
    }
    function blogAdd(){
        $sql = "SELECT * FROM blog1";

        if($result= mysqli_query($this->dbConnect(),$sql)){
            return $result;
        } else {
            die(mysqli_error($this->dbConnect()));
        }
    }
}
?>
