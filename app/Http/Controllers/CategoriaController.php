<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Variaveis para funcionamento do ACTIVE nas abas de Categoria
        $data['pagina_categorias'] = "active";
        $data['categorias_index'] = "active";

        //Chama os dados do banco
        $data['categorias'] = Categoria::all();
        return view('admin.categorias')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Variaveis para funcionamento do ACTIVE nas abas de Categoria
        $data['pagina_categorias'] = "active";
        $data['categorias_create'] = "active";

        return view('admin.criarcategoria')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nome_categoria'     => $request->categoria,
        ];

        $save = Categoria::insert($data);

        if($save) {
            $msg = "Categoria criada com sucesso !";

            return redirect('admin/categoria')->withSuccess($msg);
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
        //Variaveis para funcionamento do ACTIVE nas abas de Categoria
        $data['pagina_categorias'] = "active";
        $data['categorias_create'] = "active";
        $data['categoria'] = Categoria::find($id);

        return view('admin.criarcategoria')->with($data);
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
        $data = [
            'nome_categoria' => $request->categoria,
        ];

        $update = Categoria::find($id)->update($data);

        if($update)
            return redirect('admin/categoria');
        else
            return redirect()->back()->withInput();//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Categoria::find($id);

        if($data){
            $data->delete();
            $msg = "Categoria Deletada com Sucesso!!!";
        }else{
            $msg = "Erro ao deletar a categoria!!!";
        }

        return redirect()
            ->back()
            ->withSuccess($msg);//
    }
}
