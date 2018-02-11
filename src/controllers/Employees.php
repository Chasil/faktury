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
    
    public function addEmployee($request, $response, array $args = []) {
        
        $this->twig->render($response, 'addEmployee.phtml');
        
        return $response;
    }
    
    public function saveEmployee($request, $response, array $args = []) {
        
        if(isset($args['id'])) {
            $employee = Employee::where('id', '=', $args['id']);
        } else {
            $employee = new \Models\Employee();
        }
        
        $parsedBody = $request->getParsedBody();
        
        $employee->stanowisko = $parsedBody['stanowisko'];
        $employee->tytul = $parsedBody['tytul'];
        $employee->imie = $parsedBody['imie'];
        $employee->nazwisko = $parsedBody['nazwisko'];
        $employee->pseudonim = $parsedBody['pseudonim'];
        $employee->zatrudniony_od = $parsedBody['zatrudniony_od'];
        $employee->zatrudniony_do = $parsedBody['zatrudniony_do'];
        $employee->pstawka = $parsedBody['pstawka'];
        $employee->telefon = $parsedBody['telefon'];
        $employee->mobile = $parsedBody['mobile'];
        $employee->kraj = $parsedBody['kraj'];
        $employee->wojewodztwo = $parsedBody['wojewodztwo'];
        $employee->miasto = $parsedBody['miasto'];
        $employee->ulica = $parsedBody['ulica'];
        $employee->nrLokalu = $parsedBody['nrLokalu'];
        $employee->email = $parsedBody['email'];
        $employee->nalezny_urlop = $parsedBody['nalezny_urlop'];
        $employee->wykorzystany_urlop = $parsedBody['wykorzystany_urlop'];
        $employee->foto = $parsedBody['foto'];
        $employee->uwagi = $parsedBody['uwagi'];
        
        $employee->save();
        
        $this->twig->render($response, 'addEmployee.phtml', array('status' => 1));
        
        return $response;
    }
    
    public function editEmployee($request, $response, array $args = []) {
         
        $employee = Employee::where('id', '=', $args['id'])->find(1);
        
        $this->twig->render($response, 'editEmployee.phtml', array('employee' => $employee));
        
        return $response;
    }
}