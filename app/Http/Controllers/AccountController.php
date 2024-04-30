<?php



namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

//use resources\views\admin\mncareer;

class AccountController extends Controller

{
    public function index()
    {
        $students = Student::all();
        return view('admin.mncareer', compact('students'));
    }
}
