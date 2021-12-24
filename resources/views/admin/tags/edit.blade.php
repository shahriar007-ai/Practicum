@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
	@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	@endif
    <div class="row">
		<div class="col-xl-8 col-lg-8 mx-auto">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold custom-header-color">Edit Tag</h6>
                    <a class="btn btn-sm btn-success text-white font-weight-bold custom-header-color m-0" href="{{route('tag.list')}}">All Tags</a>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<form class="forms-sample" action="{{route('tag.update', $tag->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tag Title <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('title') is-invalid @enderror" name="title" id="" placeholder="Enter Title" value="{{ $tag->title ?? old('title')}}">
                            @error('title')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Tag Slug <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('slug') is-invalid @enderror" name="slug" id="" placeholder="Enter Slug" value="{{ $tag->slug ?? old('slug')}}">
                            @error('slug')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_img">Tag Image <br> 
                            @if(!empty($tag->img)) 
                                <img  width="80" src="{{asset('uploads/tags/images/'.$tag->img)}}" alt="{{$tag->title}}" title="{{$tag->title}}">
                            @else
                                <img  src="{{asset('admin_assets/img/no-img.png')}}" class="rounded" alt="Default image" width="80"></label></td>
                            @endif
                            </label>
                             <br>
                            <input type="hidden" value="{{$tag->img}}" name="old_img">
                            <input type="file" name="tag_img">
                            @error('tag_img')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success mr-2 mt-2">Update Tag</button>
                            <a href="{{route('tag.add')}}" class="btn btn-sm btn-secondary mt-2">Back</a>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection