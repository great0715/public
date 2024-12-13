<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_model extends CI_Model {
		
	// Login User
    public function loginUser($email, $password)
    {
        $sql = "select * from users where email = '".$email."' and status=0 limit 1";
        $query = $this->db->query($sql);
        $user = $query->result();

        if (empty($user)) return array('status' => "error", "message" => "Invalid email or password!");
        
        $user = $user[0];

        if ($password != ($user->password)) return array('status' => "error", "message" => "Invalid email or password!");
        
        $_SESSION['user_id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;

        return array('status' => "success", "message" => "Logged in successfully!");
    }
}