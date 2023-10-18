@extends('admin.layouts.master')

@section('title')
    <title>Page Writer</title>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">News</h1>
    </div>

    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit News</h6>
        </div>
        <div class="card-body">
            <div class="container">
                <h1 class="text-center"> </h1>
                <form action="{{ route('news.update', ['id'=> $news->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="news_title" class="form-label">Title</label>
                            <input type="text" name="news_title" id="news_title" value= "{{ $news->news_title }}" class="form-control" placeholder="enter title">
                            @error('news_title')
                                <div class="alert alert_danger" style="margin-top: 10px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="news_content" class="form-label">Content</label>
                            <input type="text" name="news_content" id="news_content" value= "{{ $news->news_content }}" class="form-control" placeholder="enter content">
                            @error('news_content')
                                <div class="alert alert_danger" style="margin-top: 10px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert_danger" style="margin-top: 10px">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="writer_id" class="form-label">Writer</label>
                            <select name="writer_id" id="writer_id" class="form-control">
                                @foreach ($writers as $writer)
                                    <option value="{{ $writer->id }}">{{ $writer->name_writer }}</option>
                                @endforeach
                            </select>
                            @error('writer_id')
                                <div class="alert alert_danger" style="margin-top: 10px">{{ $message }}</div>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
