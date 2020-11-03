@extends('layouts.app')
@section('layouts_content')

 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Special Team</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Team Member Name</th>
                        <th>Team Member Image</th>
                        <th>Action</th>
                       
                        
                        
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($all_special_team as $pms_special_team)
                    <tr>
                        <td>{{$pms_special_team->team_member_id}}</td>
                        <td>{{$pms_special_team->team_member_name}}</td>
                      
                        <td><img src="{{$pms_special_team->team_member_image}}"style="width:100px; height:100px;margin-left:25px;"></td>
                        <td>
                        

                            <a class="btn btn-danger" href="{{URL::to('/delete-special-team/'. $pms_special_team->team_member_id)}}" >
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