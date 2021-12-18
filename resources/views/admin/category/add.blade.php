@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
	@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	@endif
    <div class="row">
		<div class="col-xl-6 col-lg-6">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold custom-header-color">Add Category</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<form class="forms-sample" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Title <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('title') is-invalid @enderror" name="title" id="" placeholder="Enter Title" value="{{old('title')}}">
                            @error('title')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Short Description</label>
                            <textarea class="form-control" name="short_desc" id="description" rows="2">{{old('short_desc')}}</textarea>
                            @error('short_desc')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_img">Category Image</label> <br>
                            <input type="file" name="cat_img" class="form-control">
                            @error('cat_img')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success mr-2 mt-2">Add Category</button>
                            <a href="/admin/dashboard" class="btn btn-sm btn-secondary mt-2">Cancel</a>
                        </div>
                    </form>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold custom-header-color">All Category</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border-top-0">SL</th>
                                <th scope="col" class="border-top-0">Image</th>
                                <th scope="col" class="border-top-0">Title</th>
                                <th scope="col" class="border-top-0">Slug</th>
                                <th scope="col" class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=1;?>
                            @foreach($all_category as $category)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td><img src="{{asset('uploads/category/images/'.$category->img)}}" class="rounded" alt="" height="50" width="50"></td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td><a href=""><i style="color:green;font-size:14px;" class="fas fa-edit"></i></a>&nbsp;&nbsp;<a href=""><i style="color:red;font-size:14px;" class="fas fa-trash"></i></a></td>
                                </tr>  
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection