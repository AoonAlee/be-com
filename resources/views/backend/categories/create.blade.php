@extends('backend.layouts.master')
@section('title')
    Dashboard
@endsection
@section('main')
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">Create Category</h4>
                </div>
            </div>
            <div class="col-md-12">
                <div class="page-header-toolbar">
                    <div class="sort-wrapper">
                        <a class="btn btn-success" href="{{route('admin.categories')}}">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title Header Ends-->
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">

                        <form action="{{route('admin.categories.store')}}" method="post" class="forms-sample"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                       value="{{ old('name') }}" placeholder="Enter Category Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="3"
                                          value="{{ old('description') }}" placeholder="Enter Category Description" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent Category</label>
                                <select class="form-control" name="parent_id" id="exampleInputEmail1">
                                    <option value="">Please Select a Parent Category</option>
                                    @foreach($main_categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Image</label>
                                <input type="file" class="form-control" name="image" id="exampleInputEmail1">
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Add Category</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
