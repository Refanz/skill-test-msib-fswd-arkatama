<?php

namespace App\Http\Controllers;

use Str;
use DateTime;
use App\Models\Person;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePersonRequest;
use Locale;

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
        $created_at = now()->format('Y-m-d H:i:s');
    

        // $person = new Person();
        // $person->name = $name;
        // $person->age =  $age;
        // $person->city = $city;
        // $person->save();

        DB::insert('INSERT INTO person (name, age, city, created_at) VALUES (?, ?, ?, ?)', [$name, $age, $city, $created_at]);

      
        return redirect()->back()->with('success','');
    }
}
