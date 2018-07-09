<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfilesController extends Controller
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'max:191',
            'name' => 'required|max:191',  
            'nickname' => 'max:191',  
            'birthday' => 'max:191',  
            'gender' => 'max:191',  
            'birthplace' => 'max:191',  
            'character1' => 'max:191',  
            'character2' => 'max:191',  
            'hobby' => 'max:191',  
            'charmpoint' => 'max:191',  
            'dream' => 'max:191',  
            'app' => 'max:191',  
            'rank1' => 'max:191',  
            'rank2' => 'max:191',  
            'rank3' => 'max:191', 
        ]); 
        
        $profile = new Profile;
        $profile->content = $request->content;
        $profile->name = $request->name;
        $profile->nickname = $request->nickname;
        $profile->birthday = $request->birthday;
        $profile->gender = $request->gender;
        $profile->birthplace = $request->birthplace;
        $profile->character1 = $request->character1;
        $profile->character2 = $request->character2;
        $profile->hobby = $request->hobby;
        $profile->charmpoint = $request->charmpoint;
        $profile->dream = $request->dream;
        $profile->app = $request->app;
        $profile->rank1 = $request->rank1;
        $profile->rank2 = $request->rank2;
        $profile->rank3 = $request->rank3;
        $profile->save();
         
         return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
         $profile = Profile::find($name);

        return view('users.show', [
            'profile' => $profile,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $profile = Profile::find($name);

        return view('users.edit', [
            'profile' => $profile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
         $this->validate($request, [
            'content' => 'max:191',
            'name' => 'required|max:191',
            'nickname' => 'max:191',
            'birthday' => 'max:191',
            'gender' => 'max:191',
            'birthplace' => 'max:191',
            'character1' => 'max:191',
            'character2' => 'max:191',
            'hobby' => 'max:191',
            'charmpoint' => 'max:191',
            'dream' => 'max:191',
            'app' => 'max:191',
            'rank1' => 'max:191',
            'rank2' => 'max:191',
            'rank3' => 'max:191',
         ]);
         
        $profile = Profile::find($name);
        $profile->content = $request->content;
        $profile->name = $request->name;
        $profile->nickname = $request->nickname;
        $profile->birthday = $request->birthday;
        $profile->gender = $request->gender;
        $profile->birthplace = $request->birthplace;
        $profile->character1 = $request->character1;
        $profile->character2 = $request->character2;
        $profile->hobby = $request->hobby;
        $profile->charmpoint = $request->charmpoint;
        $profile->dream = $request->dream;
        $profile->app = $request->app;
        $profile->rank1 = $request->rank1;
        $profile->rank2 = $request->rank2;
        $profile->rank3 = $request->rank3;
        $profile->save();
     
         return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
