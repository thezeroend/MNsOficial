<?php

namespace App\Http\Controllers;

use App\Revista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagina['pagina_revista'] = "active";
        $pagina['revista_index'] = "active";
        $datant['revista'] = Revista::all();
        return view('admin.revista')->with($pagina)->with($datant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagina['pagina_revista'] = "active";
        $pagina['revista_create'] = "active";
        return view('admin.criarrevista')->with($pagina);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $revista = [
            'titulo'    => $request->titulo,
            'conteudo'  => $request->conteudo,
            'image'     => $request->image,
            'data_post' => date('d/m/Y'),
        ];

        if($request->hasFile('image') && $request->file('image')->isValid()){
            //Pega a extensao da imagem
            $extension = $request->image->extension();

            //Faz um nome para a imagem
            $name = $request->titulo .'-'. date('dmYHi');

            //Define o nome
            $nameFile = "{$name}.{$extension}";

            //Salva o nome
            $revista['image'] = $nameFile;

            //Faz Upload
            $upload = $request->image->storeAs('public/revista', $nameFile);

            if(!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }

        $save = Revista::insert($revista);

        if($save)
            return redirect('admin/revista');
        else
            return redirect()->back()->withInput();
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
        $datant['revista'] = Revista::find($id);
        return view('admin.criarrevista', $datant);
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
        $revista = [
            'titulo'         => $request->titulo,
            'conteudo'       => $request->conteudo,
            'categoria'      => $request->categoria,
        ];

        $update = Revista::find($id)->update($revista);

        if($update)
            return redirect('admin/revista');
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
        if(!$revista = Revista::find($id))
            return redirect()->back();

        if($revista){
            Storage::delete("public/revista/{$revista->image}");

            $revista->delete();
            $msg = "Revista deletada com sucesso";
        }else{
            $msg = "Erro ao deletar a revista";
        }

        return redirect()
            ->back()
            ->withSuccess($msg);
    }
}
