<?php

namespace App\Http\Controllers;
use App\Galeria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagina['pagina_galeria'] = "active";
        $pagina['galeria_index'] = "active";
        $datant['galeria'] = Galeria::all();
        return view('admin.galeria')->with($pagina)->with($datant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagina['pagina_galeria'] = "active";
        $pagina['galeria_create'] = "active";
        return view('admin.criargaleria')->with($pagina);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galeria = [
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
            $upload = $request->image->storeAs('public/galeria', $nameFile);

            if(!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }

        $save = Galeria::insert($galeria);

        if($save)
            return redirect('admin/galeria');
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
        $datant['galeira'] = Galeria::find($id);
        return view('admin.criargaleria', $datant);
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
        $galeria = [
            'titulo'         => $request->titulo,
            'conteudo'       => $request->conteudo,
            'categoria'      => $request->categoria,
        ];

        $update = Galeria::find($id)->update($galeria);

        if($update)
            return redirect('admin/galeria');
        else
            return redirect()->back()->withInput();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$galeria = Galeria::find($id))
        return redirect()->back();

        if($galeria){
            Storage::delete("public/galeria/{$galeria->image}");

            $galeria->delete();
            $msg = "Galeria Deletado com Sucesso";
        }else{
            $msg = "Erro ao deletar a Galeria";
        }

        return redirect()
            ->back()
            ->withSuccess($msg);

    }
}
