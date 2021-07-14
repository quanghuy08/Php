<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function create()
    {
        return view('admin.crud.form');
    }

    public function store(StoreProductRequest $request)
    {
        $request->validate();
        return 'Hello';
    }
}
