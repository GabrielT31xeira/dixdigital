<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticiasController extends Controller
{
    public function index(Noticias $model)
    {
        $noticias = Noticias::where('user_id', Auth::id())->paginate(5);
        return view('noticia.index', compact('noticias'));
    }

    public function create()
    {
        return view('noticia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Noticias::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('noticia.index')->with('success','Notícia criada com sucesso.');
    }

    public function edit($id)
    {
        $noticias = Noticias::find($id);
        return view('noticia.edit', compact('noticias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Noticias::whereId($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('noticia.index')->with('success','Notícia atualizada com sucesso.');
    }

    public function destroy($id)
    {
        Noticias::destroy($id);
        return redirect()->route('noticia.index')->with('success','Notícia apagada com sucesso.');
    }

    public function search(Request $request)
    {
        $noticiasearch = Noticias::where('title','like', "%" . $request->title ."%")->get();
        if(count($noticiasearch) == 0){
            return redirect()->route('noticia.index')->with('success','Nenhuma notícia encontrada.');
        }
        return view('noticia.search', compact('noticiasearch'));
    }
}
