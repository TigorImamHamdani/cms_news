@extends('admin.layouts.master')

@section('title')
    <title>Page News</title>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">News</h1>
    </div>
    <a href="{{ route('news.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
        class="fas fa-plus fa-sm text-white-50"></i> Create </a>
    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tables Category</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>News Title</th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Writer</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $news as $new)
                        <tr>
                            <td>{{ $new->id }}</td>
                            <td>{{ $new->news_title }}</td>
                            <td>{{ $new->news_content }}</td>
                            <td>{{ $new->category->name_category }}</td>
                            <td>{{ $new->writer->name_writer }}</td>
                            <td>{{ $new->created_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('news.edit', ['id'=> $new->id]) }}" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
                                    <form action="{{ route('news.destroy', ['id'=> $new->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-gradient-danger btn-sm text-white" onclick="return confirm('Apakah kamu yakin akan menghapus data?')"><i class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Belum Ada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
