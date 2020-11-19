@extends('layouts.app2')
@section('content')


    <div class="service-page">
        <div class="service-heading">
            <div class="container">
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <h3 class="breadcumb-header">Review page</h3>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class=" text-center">Dear {{$appointInfo->first_name}}, </p>
                    <p class="text-center">You had an appointment on {{$appointInfo->datepick}} at {{$appointInfo->timepick}}</p>

                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    @if($currentDateTime < $appointedDateTime)
                        <p class="text-center"> Feedback option will activate after the booking time. Thanks</p>
                    @else
                        <form method="post" action="{{url("feedbackAdd")}}">

                        {{csrf_field()}}
                        <input type="hidden" value="{{$appointInfo->id}}" name="appoint_id">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Feedback comment</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="appoint_cmnt" rows="3" required> {{$alreadyAdded->cmnt}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Feedback rating</label>
                            <div class="col-sm-10">
                                <span class="star-rating star-5">
                                  <input type="radio" name="rating" value="1" @if($alreadyAdded->rating == 1) checked @endif required><i></i>
                                  <input type="radio" name="rating" value="2" @if($alreadyAdded->rating == 2) checked @endif required><i></i>
                                  <input type="radio" name="rating" value="3" @if($alreadyAdded->rating == 3) checked @endif required><i></i>
                                  <input type="radio" name="rating" value="4" @if($alreadyAdded->rating == 4) checked @endif required><i></i>
                                  <input type="radio" name="rating" value="5" @if($alreadyAdded->rating == 5) checked @endif required><i></i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>

                    </form>
                    @endif

                </div>
                <div class="col-lg-2"></div>
            </div>


            </div>
        </div>
    </div>
    <!--End Page Header -->

    <!-- End our team Area -->



@endsection