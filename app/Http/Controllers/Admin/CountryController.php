<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
       foreach( $request->country as  $name)
       {
            $country = new Country();
        $country->name =   $name;
        $country->status = 'active';
        $country->save();
       }
        return redirect()->route('countries.index');
    }
}
