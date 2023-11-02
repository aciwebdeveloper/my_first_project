<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = array();

        for ($i = 1; $i <= 10; $i++)
        {
            $data[$i] = array('name' => 'Omar'.$i, 'city'=>'Lahore'.$i, 'class'=> 'Web'.$i);

        }

        return view('students', compact('data'));
    }
}
