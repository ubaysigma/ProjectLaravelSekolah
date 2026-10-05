<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Student.index', [
            'title' => 'Student',

            'students' => [
                [
                    'name' => 'Jafar Siddiq',
                    'nis' => '123421389',
                    'class' => 'XI PPLG 3',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Bagus Dwi',
                    'nis' => '123421390',
                    'class' => 'XI PPLG 2',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Ahmad Fauzi',
                    'nis' => '123421381',
                    'class' => 'XI PPLG 1',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Bagus Dwi Prasetyo',
                    'nis' => '123421382',
                    'class' => 'XI PPLG 2',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Siti Nurhaliza',
                    'nis' => '123421384',
                    'class' => 'XI PPLG 1',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Rizky Pratama',
                    'nis' => '123421385',
                    'class' => 'XI PPLG 2',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Nabila Putri Maharani',
                    'nis' => '123421386',
                    'class' => 'XI PPLG 3',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Dimas Aditya',
                    'nis' => '123421387',
                    'class' => 'XI PPLG 1',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Zahra Amelia',
                    'nis' => '123421388',
                    'class' => 'XI PPLG 2',
                    'status' => 'Aktif',
                ],
                [
                    'name' => 'Kevin Sanjaya',
                    'nis' => '123421399',
                    'class' => 'XI PPLG 3',
                    'status' => 'Aktif',
                ],
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
