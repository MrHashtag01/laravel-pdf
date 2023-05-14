<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function showEmployees(){
      $employee = Employee::all();
      return view('index', compact('employee'));
    }
}