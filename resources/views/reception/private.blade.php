@extends('reception.public.public')
@section('title','在线沟通')
@section('content')
        <link rel="stylesheet" href="{{ asset('reception/src/css/longMedical.css') }}" />

        <div class="width-auto bgc-b1 box">
            <div class="medical">

                <div class="doc-video-warp clearfix">
                    <div class="doc">
                        <div class="doc-photo">
                            <img style="width: 100%;" src="{{ $re->img }}"/>
                        </div>

                        <span>{{ $re->name }}</span>

                        <p>{{ $re->Goodat }}</p>
                    </div>

                    <div class="video-warp" style="width: 850px;height: 600px;">
                        <iframe src="https://appear.in/{{ $re->phone }}" width="100%" height="100%" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
@endsection
