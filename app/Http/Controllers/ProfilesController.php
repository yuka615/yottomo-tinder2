<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        
        $user = new User;
        $user->content = $request->content;
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->birthplace = $request->birthplace;
        $user->character1 = $request->character1;
        $user->character2 = $request->character2;
        $user->hobby = $request->hobby;
        $user->charmpoint = $request->charmpoint;
        $user->dream = $request->dream;
        $user->app = $request->app;
        $user->rank1 = $request->rank1;
        $user->rank2 = $request->rank2;
        $user->rank3 = $request->rank3;
        $user->save();
         
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
         $user = User::find($name);

        return view('users.show', [
            'user' => $user,
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
        $user = User::find($name);

        return view('users.edit', [
            'user' => $user,
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
        
        $user = User::find($name);
        $user->content = $request->content;
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->birthplace = $request->birthplace;
        $user->character1 = $request->character1;
        $user->character2 = $request->character2;
        $user->hobby = $request->hobby;
        $user->charmpoint = $request->charmpoint;
        $user->dream = $request->dream;
        $user->app = $request->app;
        $user->rank1 = $request->rank1;
        $user->rank2 = $request->rank2;
        $user->rank3 = $request->rank3;
        $user->save();
    
        return view('users.show', [
            'user' => $user,
        ]);
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
