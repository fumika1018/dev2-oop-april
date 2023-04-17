<?php 
include 'Database.php';


class Products extends Database {


    

    public function getAllProducts(){
        $sql = "SELECT * FROM products";
        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retreiving the data '. $this->conn->error );
        }
    }

    public function getProducts($id){
    
        $sql = "SELECT * FROM products WHERE id = '$id'";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error: '. $this->conn->error);
        }   

    }
    
    public function update($request){
        // session_start();
        $id = $_GET['id'];
        $productName = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];
       

        $sql =  "UPDATE products SET product_name = '$productName', price = '$price', quantity = '$quantity' WHERE id  = '$id'";

            if($this->conn->query($sql)){
                header('location:../views/dashboard.php');
        }else{
            die('Error: updating products '.$this->conn->error);
        }

    }



    public function delete(){
        session_start();
        $id = $_SESSION['id'];
        $sql = "DELETE FROM products WHERE id = '$id'";
        if($this->conn->query($sql)){
            header('location:../views/dashboard.php');
        }else{
            die('Error: deleting product ');
        }
    }

}