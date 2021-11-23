<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }


    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        dd($request->request);
    }


    public function show($id)
    {
        return "Post $id";
    }


    public function edit($id)
    {
        return view('tasks.edit', ['id' => $id]);
    }


    public function update(Request $request, $id)
    {
        dump($id);
        dd($request);
    }


    public function destroy($id)
    {
        dump(__METHOD__);
        dd($id);
    }
}
