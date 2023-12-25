<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index(){
        $tugas = Tugas::all();
        return view('tugas.index',compact(['tugas']));
    }

    public function create()
    {
        return view('tugas.create');
    }

    public function store(Request $request)
    {
        Tugas::create($request->except(['_token','submit']));
        return redirect('/tugas');
    }

    public function edit($id)
    {
        $tugas = Tugas::find($id);
        return view('/tugas.edit',compact(['tugas']));
    }

    public function update($id, Request $request)
    {
        $tugas = Tugas::find($id);
        $tugas->update($request->except(['_token','submit']));
        return redirect('/tugas');
    }

    public function destroy($id)
    {
        $tugas = Tugas::find($id);
        $tugas->delete();
        return redirect('/tugas');
    }

}