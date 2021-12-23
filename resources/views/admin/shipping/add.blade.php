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
    <div class="row">
		<div class="col-xl-10 col-lg-10 mx-auto">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold custom-header-color">Add Shipping</h6>
                    <a class="btn btn-sm btn-success text-white font-weight-bold  m-0" href="{{route('shipping.list')}}">All Shippings</a>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<form class="forms-sample" action="{{route('shipping.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Method Title <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('title') is-invalid @enderror" name="title" id="" placeholder="Enter title" value="{{old('title')}}">
                            @error('title')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Fee Amount <span class="text-danger">*</span></label>
                            <input type="text" required="" class="form-control @error('fee_amount') is-invalid @enderror" name="fee_amount" id="" placeholder="Enter amount" value="{{old('fee_amount')}}">
                            @error('fee_amount')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="short_desc">Short Description</label>
                            <textarea class="form-control @error('short_desc') is-invalid @enderror" name="short_desc" rows="3" id="short_desc" placeholder="Enter short description" maxlength="1000">{{old('short_desc')}}</textarea>
                            @error('short_desc')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Status <span class="text-danger">*</span></label>
                            <select required="" class="form-control status @error('status') is-invalid @enderror" name="status" id="status">
                                <option value="">None</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('status')
                                <small class="text-danger text-center ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success mr-2 mt-2">Add Shipping</button>
                            <a href="{{route('coupon.list')}}" class="btn btn-sm btn-secondary mt-2">Cancel</a>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection