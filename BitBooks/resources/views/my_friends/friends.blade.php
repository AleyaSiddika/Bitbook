@extends('layouts.public.master_public')
@section('content')
    <style>
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .iconnn {
            height: 20px;
            width: 20px;
        }
    </style>
    <div id="page-contents">
        <div class="container">
            <div class="row">
                @include('layouts.public.partials.left_newsfeed')
                <div class="col-md-7">

                    <!-- Post Create Box
                    ================================================= -->
                @include('layouts.public.partials.post')
                <!-- Post Create Box End -->

                    <!-- Friend List
                    ================================================= -->
                    <div class="friend-list">
                        <div class="row">
                            @foreach($myFriend as $friend)
                                <div class="col-md-6 col-sm-6">
                                    <div class="friend-card">
                                        @if(isset($friend->user_coverphoto))
                                            <img src="{{ $friend->user_coverphoto }}" height="120" width="300"/>
                                        @else
                                            <img src="{{ asset('assets/images/beauty-of-nature-17.jpg') }}" height="120" width="300"  />
                                        @endif

                                        <div class="card-info">
                                            @if(isset($friend->user_image))
                                                <img src="{{ $friend->user_image }}"  class="profile-photo-lg"/>
                                            @else
                                                <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="profile-photo-lg"  />
                                            @endif
                                            <div class="friend-info">
                                                {!! Form::open(['url' => '/confirmFriend/'.$friend->id , 'method' => 'POST']) !!}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="accepted"id="field1" value="1">
                                                {!! Form::close() !!}


                                                <a href="{{ url('/Unfriend/'.$friend->id) }}" class="pull-right btn btn-sm btn-danger">Unfriend</a>
                                                <h5><a href="{{ url('/MyFriend-timeline/'.$friend->u_id) }}" class="profile-link">{{ $friend->u_name }}</a></h5>
                                                    <p>Student at Harvard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('layouts.public.partials.right_newsfeed')
            </div>
        </div>
    </div>

@endsection