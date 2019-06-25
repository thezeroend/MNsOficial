<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Noticia;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function index()
    {
        $data['noticias'] = Noticia::paginate(6);

        $data['slides'] = Slide::all();

        return view('inicio')->with($data);
    }

    public function contato()
    {
        return view('contato');
    }

    public function noticia()
    {
        $data['noticias'] = Noticia::paginate(3);

        $data['categorias'] = DB::table('noticias')
            ->select('*')
            ->distinct()
            ->get();

        return view('noticias')->with($data);
    }

    public function meioambiente()
    {
        return view('meioambiente');
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function previsao()
    {
        return view('previsao');
    }

    public function cliente()
    {
        return view('espacoteste');
    }

    public function servicos()
    {
        return view('servicos');
    }

}
