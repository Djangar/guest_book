<?php

class User {

    public $login;
    public $passwd;
    public $group;

    public function __construct() {

        $this->login = 'admin';
        $this->passwd = 'pass1';
        $this->group = 'admin1';
    }

    public function getInfoUser() {

        echo 'Login: ' . $this->login . '<br/>';
        echo 'Password: ' . $this->passwd . '<br/>';
        echo 'Group: ' . $this->group . '<br/>';
    }

    public function checkUser($login, $passwd) {
        
        if ($this->login != '' and $this->passwd != '')
        {
            if ($this->login == $login and $this->passwd == $passwd)
            {
                if ($this->group == 'admin')
                {
                    $this->menuAdmin();
                }
                else
                {
                    $this->menuUser();
                }
            }
            else
            {
                echo 'error login & pass';
            }
        }
    }

    public function menuAdmin() {
        echo '<h2>Menu admin</h2>';
        echo '<a href="/">Add</a><br/>';
        echo '<a href="/">Edit</a><br/>';
        echo '<a href="/">Delete</a>';
    }
    
    public function menuUser() {
        echo '<h2>Menu admin</h2>';
        echo '<a href="/add.php">Add</a><br/>';
        echo '<a href="/">Edit</a><br/>';
        echo '<a href="/">Delete</a>';
    }

}

class DataBase {
    
    public $hostdb = 'localhost';
    public $userdb = 'roots';
    public $passdb = '';
    public $typedb = 'mysql';
    public $namedb = 'guestbook';
    public $db;


    public function __construct() {
        
            //$this->db = new PDO("$this->typedb:host=$this->hostdb;dbname=$this->namedb", $this->userdb, $this->passdb);
        
    }
        
}

//$user1 = new User();
//$user1->getInfoUser();
//echo '<br/>';
//$user1->checkUser('admin', 'pass1');
//
//$dbh = new DataBase();

class GuestBook extends User {
    
    public $name_guestbook = 'GuestBook';
    public $title = '';
    public $disc__guestbook = 'Simple PHP5 GuestBook';
    
    public function __construct() {
        echo '';
    }
    
    
    
    
}
