<?php
class UserModel extends Model {
    public function getUsers() {
        return $this->db->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC);
    }
}
