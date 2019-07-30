<?php

namespace App\Http\Controllers;

use App\Configuracao;
use Illuminate\Http\Request;

class ConfiguracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 1;
        $data['pagina_conf'] = "Active";
        $data['configuracao'] = Configuracao::find($id);
        //dd($data);
        return view('admin.configuracao')->with($data);
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
        $updateconf = [
            'logradouro' => $request->Logradouro,
            'numero' => $request->Numero,
            'complemento' => $request->Complemento,
            'bairro' => $request->Bairro,
            'CEP' => $request->CEP,
            'municipio' => $request->Municipio,
            'UF' => $request->UF,
            'telefone_1' => $request->Telefone_1,
            'telefone_2' => $request->Telefone_2,
            'email' => $request->Email_cont,
            'facebook' => $request->Facebook,
            'twitter' => $request->Twitter,
            'google' => $request->Google,
            'instagram' => $request->Instagram,
            'youtube' => $request->Youtube,
        ];

        $update = Configuracao::find($id)
            ->update($updateconf);

        if($update) {
            $msg = "Alteração executada com sucesso";
            return redirect('admin/configuracao')->withSuccess($msg);
        } else {
            $msg = "Erro ao alterar";
            return redirect()->back()->withInput()->withError($msg);
        }
    }
}
