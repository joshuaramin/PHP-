<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    protected $users = [
        [
            "id" => 1,
            "name" => "Alice Johnson",
            "age" => 28,
            "email" => "alice.johnson@example.com",
            "occupation" => "Software Engineer"
        ],
        [
            "id" => 2,
            "name" => "Bob Smith",
            "age" => 34,
            "email" => "bob.smith@example.com",
            "occupation" => "Graphic Designer"
        ],
        [
            "id" => 3,
            "name" => "Carol Williams",
            "age" => 25,
            "email" => "carol.williams@example.com",
            "occupation" => "Data Analyst"
        ],
        [
            "id" => 4,
            "name" => "David Brown",
            "age" => 42,
            "email" => "david.brown@example.com",
            "occupation" => "Project Manager"
        ],
        [
            "id" => 5,
            "name" => "Eva Davis",
            "age" => 30,
            "email" => "eva.davis@example.com",
            "occupation" => "Marketing Specialist"
        ],
        [
            "id" => 6,
            "name" => "Frank Miller",
            "age" => 37,
            "email" => "frank.miller@example.com",
            "occupation" => "Financial Advisor"
        ],
        [
            "id" => 7,
            "name" => "Grace Wilson",
            "age" => 26,
            "email" => "grace.wilson@example.com",
            "occupation" => "Web Developer"
        ],
        [
            "id" => 8,
            "name" => "Hank Moore",
            "age" => 40,
            "email" => "hank.moore@example.com",
            "occupation" => "Sales Manager"
        ],
        [
            "id" => 9,
            "name" => "Ivy Taylor",
            "age" => 29,
            "email" => "ivy.taylor@example.com",
            "occupation" => "HR Specialist"
        ],
        [
            "id" => 10,
            "name" => "Jack Anderson",
            "age" => 35,
            "email" => "jack.anderson@example.com",
            "occupation" => "Operations Manager"
        ]
    ];

    public function index()
    {
        return view('admin', ['users' => $this->users]);
    }

    public function create()
    {
        return view('admin-create');
    }

    public function edit($id)
    {

        $user = User::find($id);

        if (!$user) {
            dd("No record");
        }
        return view("admin-edit", compact('user'));
    }
    public function show($id)
    {
        $user = collect($this->users)->firstWhere('id', $id);

        if (!$user) {
            abort(404, 'User not found');
        }

        return view('admin-show', ['user' => $user]);
    }
}
