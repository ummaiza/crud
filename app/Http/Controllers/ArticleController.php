<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {

        // $articles = DB::table('articles')->get();
        // return view('article.index',[
        //     'articles' => $articles,
        // ]);

        // return view('articles.index', compact('articles'));

        return view('articles.index', [
            'articles' => DB::table('articles')->get(),
        ]);
    }

    public function show($id)
    {
        return view('articles.show', [
            'article' => DB::table('articles')->find($id),
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        #validate
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);


        DB::table('articles')->insert([
            'title' => $request->title,
            'body' => $request->body,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/articles/create');
    }

    public function edit($id)
    {
        return view('articles.edit',[
            'article' => DB::table('articles')->find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        #validate
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $article = DB::table('articles')->where('id',$id)->first();

        DB::table('articles')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);


        return redirect("articles/{$article->id}");
    }

    public function destroy($id)
    {
        DB::table('articles')->delete($id);
        return back();
    }
}
