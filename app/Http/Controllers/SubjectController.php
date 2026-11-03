<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Contracts\View\View;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $subjects = Subjects::all();

        return view('Admin.Subject.index', compact('subjects'));
    }
}

