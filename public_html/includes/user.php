<?php
    /*** User Class for account creation and login pupose ***/
    
    class User
    {
        private $con;

        function __construct()
        {
            include_once("../database/db.php");
            $db = new Database();
            $this->con = $db->connect();
        }

        //User is already registered or not
	    private function emailExists($email){
            $pre_stmt = $this->con->prepare("SELECT id FROM user WHERE email = ? ");
            $pre_stmt->bind_param("s",$email);
            $pre_stmt->execute() or die($this->con->error);
            $result = $pre_stmt->get_result();
            if($result->num_rows > 0){
                return 1;
            }else{
                return 0;
            }
        }

        public function createUserAccount($username,$email,$password,$usertype){
            //To protect your application from SQL Attack using prepare statement
            if ($this->emailExists($email)) {
                return "EMAIL_ALREADY_EXISTS";
            }else{
                $pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
                $date = date("Y-m-d");
                $notes = "";
                $pre_stmt = $this->con->prepare("INSERT INTO `user`(`username`, `email`, `password`, `user_type`, `register_date`, `last_login`, `notes`) 
                 VALUES (?,?,?,?,?,?,?)");
                $pre_stmt->bind_param("sssssss",$username,$email,$pass_hash,$usertype,$date,$date,$notes);
                $result = $pre_stmt->execute() or die($this->con->error);
                if ($result) {
                    return $this->con->insert_id;
                }else{
                    return "SOME_ERROR";
                }
            }
        }
    }
    
    /* Creating Object*/
    $user = new User();
    echo $user->createUserAccount("Admin Test","ims_admin@gmail.com","1234567890","Admin");

    //echo $user->userLogin("ims_admin@gmail.com","1234567890");
    //echo $_SESSION["username"];
?>