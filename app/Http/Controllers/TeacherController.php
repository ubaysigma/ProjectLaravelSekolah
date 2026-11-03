<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Contracts\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teachers::all();

        return view('Admin.Teacher.index', compact('teachers'));
    }
}
