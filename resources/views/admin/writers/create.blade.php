@extends('admin.layouts.master')

@section('title')
    <title>Page Writer</title>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Writer</h1>
    </div>

    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Writer</h6>
        </div>
        <div class="card-body">
            <div class="container">
                <h1 class="text-center"> </h1>
                <form action="{{ route('writer.store') }}" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="name_writer" class="form-label">Writer Name</label>
                            <input type="text" name="name_writer" id="name_writer" class="form-control" placeholder="enter writer">
                            @error('name_writer')
                                <div class="alert alert_danger" style="margin-top: 10px">{{ $message }}</div>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
