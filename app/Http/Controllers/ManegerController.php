<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ManegerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Redirect('pickName');
    }


    public function pickName()
    {
        return view('pickname');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pickNamePost(Request $request)
    {
        if (Auth::guest()) {
            return view('categories', ['name' => $request->name]);
        } else {
            dd($request->name);
            return view('pickname');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logeout()
    {
        Auth::logout();
  
        return Redirect('pickName');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Messages();
        $message->message = $request->input("name");
        $message->save();
        return response()->json($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messages  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messages  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messages  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messages  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $category)
    {
        //
    }
}
