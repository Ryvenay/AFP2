@extends('layout')
@section('content')
        <div class="row">
            <div class="col-12-md" id="never">
            <video id="video_never" controls autoplay muted>
                <source id="mp4_src" src="{{asset('/img/forgot_page_content/forgot_psw.mp4')}}" type="video/mp4">
            </video>
            </div>
        </div>
@endsection