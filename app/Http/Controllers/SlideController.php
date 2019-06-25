<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slide'] = Slide::all();
	$data['slide_index'] = "inicio";
	$data['pagina_slide'] = "slide";

        return view('admin.slides')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$data['slide_create'] = "create";
	$data['pagina_slide'] = "slide";
        return view('admin.criarslide')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = [
            'titulo'    => $request->titulo,
            'descricao' => $request->descricao,
            'url'       => $request->url,
            'image'     => $request->image,
            'data_post' => date('d/m/Y'),
        ];

        if($request->hasFile('image') && $request->file('image')->isValid()){
            //Pega a extensao da imagem
            $extension = $request->image->extension();

            //Faz um nome para a imagem
            $name = $request->titulo .'-'. date('dmY');

            //Define o nome
            $nameFile = "{$name}.{$extension}";

            //Salva o nome
            $slide['image'] = $nameFile;

            //Faz Upload
            $upload = $request->image->storeAs('public/slides', $nameFile);

            if(!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }

        $save = Slide::insert($slide);

        if($save)
            return redirect('admin/slide');
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
        $data['slides'] = Slide::find($id);
        return view('admin.criarslide', $data);
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
        $slide = [
            'titulo'    => $request->titulo,
            'url'       => $request->url,
            'descricao' => $request->descricao,
        ];

        $update = Slide::find($id)->update($slide);

        if($update)
            return redirect('admin/slide');
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
        $slide = Slide::find($id);

        if($slide){
            \Storage::delete("public/slides/{$slide->image}");

            $slide->delete();
            $msg = "Slide Deletado com Sucesso";
        }else{
            $msg = "Erro ao deletar o Slide";
        }

        return redirect()
            ->back()
            ->withSuccess($msg);
    }
}
