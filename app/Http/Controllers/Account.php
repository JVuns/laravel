<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account as ModelsAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class Account extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index');
        }
    }

    public function create(Request $request)
    {        

        // dd($request);
        $validated = $request->validate([
            'first_name' => 'required|alpha_dash:ascii|max:25',
            'last_name' => 'required|alpha_dash:ascii|max:25',
            'gender' => 'required',
            // 'password' => 'confirmed|numeric',
            'email' => 'required|email',
            // 'role' => [
            //     'required',
            //     Rule::in(['Admin', 'User'])
            //   ],
            // 'image' => 'required|image',
        ]);

        // dd("Deez");

        $image = $request->file('image');
        $imageName = date('YmdHi') . $image->getClientOriginalName();
        Storage::putFileAs('public/images', $image, $imageName);
        $imageURL = 'images/' . $imageName;

        User::create([
            'role_id' => $validated['role'],
            'gender_id' => $validated['gender']=='Female'  ? 1 : 2,
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'picture_link' => $imageURL,
            'password' => $validated['password'],
        ]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
