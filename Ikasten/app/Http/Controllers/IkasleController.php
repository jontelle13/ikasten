<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikaslea;

class IkasleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ikasleak=Ikaslea::all();

        return view("osoa",['ikasleak'=>$ikasleak]);
    }
    public function lista(){
        $ikasleak=Ikaslea::all();

        return view('layouts.lista',['ikasleak'=>$ikasleak]);
    }
    public function editatu($id){
        $ikasle=Ikaslea::where('id',$id)->first();
        return view('layouts.editatu',['ikaslea'=>$ikasle]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $izena=$request->input("izena");
        $adina=$request->input("adina");

        Ikaslea::create(['izena'=>$izena,'adina'=>$adina]);

        return redirect("/");
    }

    public function aldatu(Request $request){

    $izena = $request->input('izena');
    $adina = $request->input('adina');

    $ikaslea = Ikaslea::find($request->input('id'));

    if ($ikaslea) {
        if (!empty($izena)) {
            $ikaslea->izena = $izena;
        }

        if (!empty($adina)) {
            $ikaslea->adina = $adina;
        }

        $ikaslea->save();

        return redirect('/lista');
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function kendu(Request $request){

        $izena=$request->input("izena");
        $adina=$request->input("adina");
        $ikaslea=Ikaslea::where('izena',$izena)
        ->where('adina',$adina)
        ->first();

        $ikaslea->delete();

        return redirect('/');
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
