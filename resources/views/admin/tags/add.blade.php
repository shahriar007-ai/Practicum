@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
    </svg>
	@if(Session::has('success'))
		<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
			&nbsp;{{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
		</div>
	@endif
    <div class="row">
		<div class="col-xl-8 col-lg-8 mx-auto">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold custom-header-color">Add Tag</h6>
                    <a class="btn btn-sm btn-success text-white font-weight-bold custom-header-color m-0" href="{{route('tag.list')}}">All Tags</a>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<form class="forms-sample" action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tag Title <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('title') is-invalid @enderror" name="title" id="" placeholder="Enter Title" value="{{old('title')}}">
                            @error('title')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Tag Slug <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('slug') is-invalid @enderror" name="slug" id="" placeholder="Enter Slug" value="{{old('slug')}}">
                            @error('slug')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_img">Tag Image</label> <br>
                            <input type="file" name="tag_img" class="">
                            @error('tag_img')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success mr-2 mt-2">Add Tag</button>
                            <a href="/admin/dashboard" class="btn btn-sm btn-secondary mt-2">Cancel</a>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection