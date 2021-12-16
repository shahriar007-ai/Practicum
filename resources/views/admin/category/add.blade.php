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
					<form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Title <span class="required-icon">*</span></label>
                            <input type="text" class="form-control" name="book_name" id="book_name" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Short Description</label>
                            <textarea class="form-control ckeditor" name="description" id="description" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cat_img">Category Image <span class="text-danger">*</span></label> <br>
                            <input type="file" name="cat_img" class="dropify">
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
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 246px;">Position</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 114px;">Office</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Age</th></tr>
                            </thead>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th></tr>
                            </tfoot>
                            <tbody>  
                                <tr class="even">
                                    <td class="sorting_1">Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection