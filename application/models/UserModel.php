<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model
{

    private $tableName;

    function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
    }



}


