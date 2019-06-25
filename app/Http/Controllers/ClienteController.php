<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datant['pagina_clientes'] = "active";
        $datant['clientes_index'] = "active";
        $datant['usuarios'] = Cliente::all();
        return view('admin.clientes')->with($datant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datant['clientes_create'] = "active";
        $datant['pagina_clientes'] = "active";
        return view('admin.criarcliente')->with($datant);
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
            'email' => 'required|string|email|max:255|unique:clientes',
            'cpf' => 'required|string|max: 13|unique:clientes',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $data = [
            'name'     => $request->name,
            'cpf'  => $request->cpf,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ];

        $save = Cliente::insert($data);

        if($save) {
            $msg = "Cliente Cadastrado com sucesso !";

            return redirect('admin/cliente')->withSuccess($msg);
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
        $datant['clientes_create'] = "active";
        $datant['pagina_clientes'] = "active";
        $datant['usuario'] = Cliente::find($id);
        return view('admin.criarcliente')->with($datant);
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
        $update = Cliente::find($id)->update($updateuser);

        if($update)
            return redirect('admin/cliente');
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
        $datant = Cliente::find($id);

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