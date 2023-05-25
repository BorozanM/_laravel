<?php

namespace App\Http\Controllers;

use App\Http\Resources\LaptopResource;
use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//get
    {
        return LaptopResource::collection(Laptop::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//post
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:100',
            'ekran' => 'required|string',
            'baterija' => 'required|string',
            'boja' => 'required|string',
            'cena'=>'required',
            'os'=>'required',

        ]);

        if ($validator->fails())
            return response()->json($validator->errors());
        $t = Laptop::create([
            'naziv' => $request->naziv,
            'ekran' => $request->ekran,
            'baterija' => $request->baterija,
            'boja' => $request->boja,
            'os' => $request->os,
            'cena' => $request->cena
        ]);
        $t->save();
        return response()->json(['Laptop kreiran!', $t]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show($id)//get
    {
        $t=Laptop::find($id);
        if($t){
            return response()->json(['Uspesno pronadjeno',new LaptopResource($t)]);
         }
        return response()->json('Trazeni objekat ne postoji u bazi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)//put
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'string|max:100',
            'ekran' => 'string',
            'baterija' => 'string',
            'boja' => 'string',
            'cena'=>'',
            'os'=>'',

        ]);

        if ($validator->fails())
            return response()->json($validator->errors());
        $t = Laptop::find($id);

        if($t){
            $t->naziv=$request->naziv;
            $t->ekran=$request->ekran;
            $t->baterija=$request->baterija;
            $t->boja=$request->boja;
            $t->cena=$request->cena;
            $t->os=$request->os;

            $t->save();
            return response()->json(['Uspesno izmenjeno!', $t]);

        }else{
            return response()->json('Trazeni objekat ne postoji u bazi');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//delete
    {
        $t = Laptop::find($id);
        if($t){
            $t->delete();
            return response()->json(['Uspesno obrisano!', new LaptopResource($t)]);

        }

       return response()->json('Trazeni objekat ne postoji u bazi');
    }
}
