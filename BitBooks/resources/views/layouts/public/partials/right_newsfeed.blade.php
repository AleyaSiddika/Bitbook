<div class="col-md-2 static">
    <div class="suggestions" id="sticky-sidebar">
        <h4 class="grey">Quick Access</h4>
        {{--@foreach($friend as $user)--}}
        <div class="follow-user">
            {{--<img src="{{ asset('assets/images/users/user-11.jpg')}}" alt="" class="profile-photo-sm pull-left" />--}}
            {{--<div>--}}
                {{--<h5><a href="{{ url('/Timeline') }}">{{$user->u_name}}</a></h5>--}}
                {{--<a href="#" class="text-green">Add friend</a>--}}
            {{--</div>--}}



            <ul class="nav-news-feed">
                <li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline') }}">Timeline</a></div></li>
                <li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-about') }}">About You</a></div></li>
                <li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-edit-profile') }}">Edit:Basic Info</a></div></li>
                <li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-edit-work') }}">Edit Work</a></div></li>
                <li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Timeline-edit-interest') }}">Edit Interest</a></div></li>
                <li><i class="icon ion-ios-paper"></i><div><a href="{{ url('/Contact') }}">Contact Us</a></div></li>
            </ul>
        </div>
        {{--@endforeach--}}
    </div>
</div>