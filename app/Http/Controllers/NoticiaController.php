<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagina['pagina_noticia'] = "active";
        $pagina['noticia_index'] = "active";
        $datant['noticia'] = Noticia::all();
        return view('admin.noticias')->with($pagina)->with($datant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagina['pagina_noticia'] = "active";
        $pagina['noticia_create'] = "active";
        return view('admin.criarnoticia')->with($pagina);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = [
            'titulo'    => $request->titulo,
            'conteudo'  => $request->conteudo,
            'categoria' => $request->categoria,
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
            $noticia['image'] = $nameFile;

            //Faz Upload
            $upload = $request->image->storeAs('public/noticias', $nameFile);

            if(!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }

        $save = Noticia::insert($noticia);

        if($save)
            return redirect('admin/noticia');
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
        $datant['noticia'] = Noticia::find($id);
        return view('admin.criarnoticia', $datant);
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
        $noticia = [
            'titulo'         => $request->titulo,
            'conteudo'       => $request->conteudo,
            'categoria'      => $request->categoria,
        ];

        $update = Noticia::find($id)->update($noticia);

        if($update)
            return redirect('admin/noticia');
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
        if(!$noticia = Noticia::find($id))
            return redirect()->back();

        if($noticia){
            Storage::delete("public/noticias/{$noticia->image}");

            $noticia->delete();
            $msg = "Noticia Deletado com Sucesso";
        }else{
            $msg = "Erro ao deletar a Noticia";
        }

        return redirect()
            ->back()
            ->withSuccess($msg);

    }
}