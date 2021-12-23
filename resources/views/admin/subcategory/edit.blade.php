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
					<h6 class="m-0 font-weight-bold custom-header-color">Edit SubCategory</h6>
                    <a class="btn btn-sm btn-success text-white font-weight-bold custom-header-color m-0" href="{{route('subcategory.add')}}">All SubCategory</a>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<form class="forms-sample" action="{{route('subcategory.update', $subcategory->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Title <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('title') is-invalid @enderror" name="title" id="" placeholder="Enter Title" value="{{ $subcategory->title ?? old('title')}}">
                            @error('title')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Parent Category <span class="text-danger">*</span></label>
                            <select required="" class="form-control parent_category @error('parent_category') is-invalid @enderror" name="parent_category" id="parent_category">
                                <option value="">None</option>
                                @foreach($parent_category as $cat)
                                    <option value="{{$cat->id}}" {{ $cat->id == $subcategory->parent_id ? 'selected' : ''}}><span class="boldCat">{{$cat->title}}</span></option>
                                @endforeach
                            </select>
                            @error('parent_category')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Short Description</label>
                            <textarea class="form-control" name="short_desc" id="description" rows="2">{{ $subcategory->short_desc ?? old('short_desc')}}</textarea>
                            @error('short_desc')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cat_img">Category Image <br> @if(!empty($subcategory->img)) 
                                <img  width="80" src="{{asset('uploads/subcategory/images/'.$subcategory->img)}}" alt="{{$subcategory->title}}" title="{{$subcategory->title}}">
                            @else
                                <img  src="{{asset('admin_assets/img/no-img.png')}}" class="rounded" alt="Default image" width="80"></label></td>
                            @endif</label> <br>
                            <input type="hidden" value="{{$subcategory->img}}" name="old_img">
                            <input type="file" name="cat_img"><br>
                            @error('cat_img')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success mr-2 mt-2">Update SubCategory</button>
                            <a href="{{route('subcategory.add')}}" class="btn btn-sm btn-secondary mt-2">Back</a>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection