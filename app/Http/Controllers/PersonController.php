<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use DateTime;
use Str;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('add_person');
    }

    public function store(StorePersonRequest $request)
    {

        $dataPerson = $request->string('input_user');

        $dataInput = $dataPerson->explode(' ', PHP_INT_MAX);

        $name = Str::upper($dataInput[0]);
        $age = $dataInput[1];
        $city = Str::upper($dataInput[2]);
    

        $person = new Person();
        $person->name = $name;
        $person->age =  $age;
        $person->city = $city;
        $person->save();

      
        return redirect()->back()->with('success','');
    }
}
