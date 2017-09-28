<?php

// application/models/UserModel.class.php

class DuanModel extends Model{


    public function getDuan(){

        $sql = "select * from $this->table";

        $users = $this->db->getAll($sql);

        return $users;

    }

}

