<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disabled = null;
        $name = null;
        $email = null;
        $password = null;
        $password_confirmation = null;
        return view('users.create')->with(compact('disabled','name', 'email', 'password', 'password_confirmation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = \Request::except('_token');
        extract($input);

        $user = new \App\User();
        $user->name  = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        return redirect()->route('users.index')->with('msgSuccess', "Usuário incluído com sucesso!");;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disabled = 'disabled';
        $user = User::find($id);

        if (is_null($user)) {
            return redirect()->route('users.index')->withErrors(['Usuário não localizado!']);
        }

        return view('users.show')->with(compact('disabled','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disabled = null;
        $user = User::find($id);

        if (is_null($user)) {
            return redirect()->route('users.index')->withErrors(['Usuário não localizado!']);
        }

        return view('users.edit')->with(compact('disabled', 'user'));
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
        $input = \Request::only('name', 'email', 'password');
        extract($input);

        $user = User::find($id);
        if (is_null($user)) {
            return redirect()->route('users.index')->withErrors(['Usuário não localizado!']);
        }

        $user->name  = $name;
        $user->email = $email;
        if (!empty($password)) {
            $user->password = bcrypt($password);
        }
        $user->save();

        return redirect()->route('users.edit', $id)->with('msgSuccess', "Usuário atualizado com sucesso!");
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            return redirect()->route('users.index')->withErrors(['Usuário não localizado!']);
        }

        $result = $user->delete();
        if (!$result) {
            return redirect()->route('users.index')->withErrors(['Falha ao excluir o usuário!']);
        }

        return redirect()->route('users.index')->with('msgSuccess', "Usuário excluído com sucesso!");
     }
}
