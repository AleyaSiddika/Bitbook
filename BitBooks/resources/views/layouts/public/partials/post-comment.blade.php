<form name="comments" action={{ url('/comments/'.$item->id)  }} method="post">
    {{ csrf_field() }}
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input name="u_id" type="hidden" value="{{ Auth::user()->id }}">
    <input name="s_id" type="hidden" value="{{ $item->id }}">
    <div class="post-comment">
        @if(isset($user->user_image))
            <img src="{{ $user->user_image }}" class="profile-photo-sm" />
        @else
            <img src="{{ asset('assets/images/man-icon-2x.png') }}" class="profile-photo-sm" />
        @endif

        <input type="text" name="c_details" id="comment" required="required" style="height: 30px; width: 250px; border: 1px solid #ccc; border-radius: 5px;" placeholder="  Post a comment">
        <button type="submit" class="btn  btn-xs" style="height: 30px;color: #fff; background-color: #398cb4; ">Send</button>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <div >
            <div class="tools">
                <ul class="publishing-tools list-inline">
                    <a>
                        <input type="file" name="img" id="img" class="inputfile"/>
                        <label for="img"><i class="ion-images">&nbsp; Image</i></label>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</form>