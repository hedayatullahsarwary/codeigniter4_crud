<?php
namespace App\Controllers;

class EmployeesController extends BaseController {
    public function Index() {
        echo view('employees/employee_list');
    }
}
?>