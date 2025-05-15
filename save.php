<?php
$it=$_POST["title"];
$au=$_POST["author"];
$ye=$_POST["year"];
$ge=$_POST["gen"];
$pr=$_POST["amount"];
$host="127.0.0.1";
$user="root";
$pwd="";
$db="bookstoredb";
$connect=mysqli_connect($host,$user,$pwd,$db)or die("connection error");
$sql="INSERT INTO books(title,auther,publishedyear, genre,price) VALUES ('$it','$au','$ye','$ge',$pr)";
if($connect->query($sql)===TRUE)
{
    print("Insert successsful");
}
else
{
    print("Error".$connect->error);
}
$connect->close();