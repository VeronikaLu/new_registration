<?php
 
    class user {
        
        protected $login;
        protected $status;
        protected $password;
        
        public function __construct( $login, $password) {
            $this->login = $login;
            $this->password = $password;
        }
        
        public function getLogin() {
            return $this->login;
        }        
        
        public function getPassword() {
            return $this->password;
        }
 
    }
    
    class user_comment extends read_only {
        
        public function getStatus() {
            return $this->status = 'user_comment';
        }
    
    }
?>