<?php
namespace Quwi\framework; 
 define("ROOT_DIR", 'C:\wamp64\FW_Assignment2');
 define("APP_DIR", ROOT_DIR . '\app');
 define("FRAMEWORK_DIR", ROOT_DIR . '\framework');
 define('TPL_DIR', ROOT_DIR . '\tpl');
 define('DATA_DIR', ROOT_DIR . '\data');
 
class Registry
{
        
        private static $instance = null;
        protected $access = ['profile'=>['tester@comp3170.com','mal@phite.com']];

        private function __construct()
        {
        }
        
        public static function instance(): self
        {
        if (is_null(self::$instance)) {
        self::$instance = new self();
        }
         return self::$instance;
        }

        public static function create(){
        if(session_status() ==PHP_SESSION_NONE){
                session_start(); 
                }       
        }


        
    public static function destroy(){
        if(isset($_SESSION)){
            unset($_SESSION);
            session_destroy();
        }
        
        //header("Location: index.php");
    }

    public function add(string $email, $value){
        /*if(preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name) == 0 ){
            trigger_error('Invalid variable name used', E_USER_ERROR);
        } */
        $_SESSION[$email] = $value ;
    }

    public function show($email){
        if(isset($_SESSION[$email])){
            return $_SESSION[$email];
        }
        return null;
    }
    public function remove(string $email){
        if(isset($_SESSION[$email])){
            unset($_SESSION[$email]);
        }
    }

    public function accessible(string $user, $page) : bool{
        if(in_array($user, $this->access[$page])){
            return true;
        }
        return false;
    }


        }