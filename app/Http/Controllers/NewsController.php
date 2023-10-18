<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $news = News::get();
        return view('admin.news.index', compact('news'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $writers = Writer::get();
        return view('admin.news.create', compact('categories', 'writers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'news_title' => 'required',
            'news_content' => 'required',
            'writer_id' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $news['news_title'] = $request->news_title;
        $news['news_content'] = $request->news_content;
        $news['writer_id'] = $request->writer_id;
        $news['category_id'] = $request->category_id;

        News::create($news);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $news = News::find($id);
        $categories = Category::all();
        $writers = Writer::all();

        return view('admin.news.edit', compact('news', 'categories', 'writers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validator = Validator::make($request->all(), [
            'news_title' => 'required',
            'news_content' => 'required',
            'writer_id' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $news['news_title'] = $request->news_title;
        $news['news_content'] = $request->news_content;
        $news['writer_id'] = $request->writer_id;
        $news['category_id'] = $request->category_id;

        News::whereId($id)->update($news);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);

        if($news) {
            $news->delete();
        }

        return redirect()->route('news.index');
    }
}
