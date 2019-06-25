<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('guest');

        $datant['pagina_users'] = "active";
        $datant['users_index'] = "active";
        $datant['usuarios'] = User::all();
        return view('admin.usuarios')->with($datant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datant['users_create'] = "active";
        $datant['pagina_users'] = "active";
        return view('admin.criarusuario')->with($datant);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'usuario' => 'required|string|max: 255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $data = [
            'name'     => $request->name,
            'usuario'  => $request->usuario,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ];

        $save = User::insert($data);

        if($save) {
            $msg = "Usuário Cadastrado com sucesso !";

            return redirect('admin/usuario')->withSuccess($msg);
        }else {
            return redirect()->back()->withInput();
        }
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
        $datant['users_create'] = "active";
        $datant['pagina_users'] = "active";
        $datant['usuario'] = User::find($id);
        return view('admin.criarusuario')->with($datant);
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
        if($request->password != '' || $request->password != null)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $updateuser = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ];
        }else {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
            ]);

            $updateuser = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        }
        $update = User::find($id)->update($updateuser);

        if($update)
            return redirect('admin/usuario');
        else
            return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datant = User::find($id);

        if($datant){
            $datant->delete();
            $msg = "Usuário Deletado com Sucesso!!!";
        }else{
            $msg = "Erro ao deletar o Usuário!!!";
        }

        return redirect()
            ->back()
            ->withSuccess($msg);
    }
}
