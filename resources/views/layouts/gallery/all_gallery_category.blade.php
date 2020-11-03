@extends('layouts.app')
@section('layouts_content')

 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category name</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                	 @foreach($all_gallery_category as $pms_gallery_category)
                    <tr>
                        <td>{{$pms_gallery_category->gallery_category_id}}</td>
                        <td>{{$pms_gallery_category->gallery_category_name}}</td>
                        <td>
                        	<a class="btn btn-info" href="">
								<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>
							</a>

							<a class="btn btn-danger" href="">
								<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
							</a>
                        </td>
                        
                    </tr>
                    @endforeach
                 </tbody>
                
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
		
				 
				

		<div class="speach"style=" height: 75px; "></div>




@endsection