<?php

namespace Controllers;

use \Models\Employee;

class Employees  extends \Controllers\BaseController {
    
    public function __construct($c) {
        parent::__construct($c);
    }
    
    public function index($request, $response, array $args = []) {

        $employee = Employee::get();
        
        $this->twig->render($response, 'employees.phtml', array('employees' => $employee));
        
        return $response;
    }
}

