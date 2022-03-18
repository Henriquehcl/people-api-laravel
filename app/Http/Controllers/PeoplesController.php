<?php

namespace App\Http\Controllers;
use App\Models\People;

use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    //
    public function listAll(){

        return People::all();// chamando o model "People" que vai acessar o DB
    }

    public function savePeople(Request $request){

        //validação
        $request->validate([
            'people_name'=>'required|max:100',
            'email'=>'max:50|email:rfc',
            'fone'=>'max:20',
            'address'=>'max:100',
            'country'=>'max:50',
            'state'=>'max:80',
            'city'=>'max:50'
        ]);
        ////////

        $people = People::create([
            'people_name'=>$request->input('people_name'),
            'email'=>$request->input('email'),
            'fone'=>$request->input('fone'),
            'address'=>$request->input('address'),
            'country'=>$request->input('country'),
            'state'=>$request->input('state'),
            'city'=>$request->input('city')
        ]);

        return $people;
    }

    public function listPeople(People $people){

        return $people;
    }

    public function updatePeople(Request $request, People $people){


        //validação
        $request->validate([
            'people_name'=>'required|max:100',
            'email'=>'max:50|email:rfc',
            'fone'=>'max:20',
            'address'=>'max:100',
            'country'=>'max:50',
            'state'=>'max:80',
            'city'=>'max:50'
        ]);
        ////////

        $people-> people_name = $request->input('people_name');
        $people-> email = $request->input('email');
        $people-> fone = $request->input('fone');
        $people-> address = $request->input('address');
        $people-> country = $request->input('country');
        $people-> state = $request->input('state');
        $people-> city = $request->input('city');

        $people->save();

        return $people;
    }

    public function deletePeople(People $people){

        $people->delete();

        return response() -> json(['message'=>'Success']);
    }
}
