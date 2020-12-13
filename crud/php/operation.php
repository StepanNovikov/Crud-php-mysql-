<?php
    require_once("db.php");
    require_once("component.php");

    $con = CreateDb();

    //create button click
    if(isset($_POST['create'])){
        createData();
    }

    function createData(){
        $bookname = textboxValue("book_name");
        $bookpublisher = textboxValue("book_publisher");
        $bookprice = textboxValue("book_price");

        if($bookname && $bookpublisher && $bookprice){
            $sql = "INSERT INTO books (book_name, book_publisher, book_price) VALUES ('$bookname','$bookpublisher','$bookprice')";

            if(mysqli_query($GLOBALS['con'], $sql)){
                TextNode("success", "Record seccesfully inserted...!");
            } else {
                echo "Error";
            }
        } else {
            TextNode("error", "Provide Data in the TextBox");
        }

    }

    function textboxValue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
        if(empty($textbox)){
            return false;
        } else {
            return $textbox;
        }
    }

    //messages
    function TextNode($classname, $msg){
        $element = "<h6 class='$classname'>$msg</h6>";
        echo $element;
    }