<?php

class User
{
    //declare variable
    public $name;
    public $email;
    public $password;
    public $role;
    public $description;


    private $conn;
    private $table_name;

    //constructor
    public function __construct($db)
    {
        $this->conn = $db;
        $this->table_name = "Admin_user";
    }


    public function create_data()
    {

        //sql query to create data
        $query = "INSERT INTO " . $this->table_name .
            " SET name = ?, email = ?, password = ?, role = ?, description = ? ";


        //prepare
        $obj = $this->conn->prepare($query);

        //sanitize
        //some special symbol text  values  tags

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->role = htmlspecialchars(strip_tags($this->role));
        $this->description = htmlspecialchars(strip_tags($this->description));



        //binding
        $obj->bindparam(1, $this->name);
        $obj->bindparam(2, $this->email);
        $obj->bindparam(3, $this->password);
        $obj->bindparam(4, $this->role);
        $obj->bindparam(5, $this->description);



        //execute
        if ($obj->execute()) {

            return true;
        }
        printf("Error creating :%s \n", $obj->error);
        return false;
    }







    public function delete_data()
    {

        $obQuery = "DELETE FROM  " . $this->table_name . " WHERE id ";

        $obDel = $this->conn->prepare($obQuery);

        $obDel->execute();


        //execute
        if ($obDel->execute()) {

            return true;
        }
        printf("Error creating :%s \n", $obDel->error);
        return false;
    }




    public function update_data()
    {

        $obQuery = "UPDATE " . $this->table_name .
            " SET name = ?, email = ?, password = ?, role = ?, description = ? WHERE id = id";

        $obUp = $this->conn->prepare($obQuery);

        //sanitize
        //some special symbol text  values  tags

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->role = htmlspecialchars(strip_tags($this->role));
        $this->description = htmlspecialchars(strip_tags($this->description));



        //binding
        $obUp->bindparam(1, $this->name);
        $obUp->bindparam(2, $this->email);
        $obUp->bindparam(3, $this->password);
        $obUp->bindparam(4, $this->role);
        $obUp->bindparam(5, $this->description);

        $obUp->execute();


        //execute
        if ($obUp->execute()) {

            return true;
        }
        printf("Error creating :%s \n", $obUp->error);
        return false;
    }


    public function read_data()
    {

        $obQuery = "SELECT * FROM " . $this->table_name . "";
        $obRead = $this->conn->prepare($obQuery);
        //sanitize
        //some special symbol text  values  tags
        $obRead->execute();
        //execute
        if ($obRead->execute()) {
            $obRead->fetchAll(PDO::FETCH_ASSOC);
            return true;
        }
        printf("Error creating :%s \n", $obRead->error);
        return false;
    }
}
