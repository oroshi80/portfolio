<?php
class owner {
    public $company;
    public $author;
    public $emial;



    function __construct($company, $author, $email) {
        $this->company = $company;
        $this->author = $author;
        $this->email = $email;
    }
 
    function get_company() {
        return $this->company;
    }
    function get_author() {
        return $this->author;
    }
    function get_email() {
        return $this->email;
    }
}

?>