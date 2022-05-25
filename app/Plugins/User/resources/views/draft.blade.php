@extends("App::app")

@section('title',"我的草稿")


@section('content')

    <div class="row row-cards justify-content-center">
        <div class="col-md-12">
            <div class="row row-cards justify-content-center">
                <div class="col-md-12">
                    <div class="row row-cards justify-content-center">
                        @if($page->count())
                            @foreach($page as $data)
                                <div class="col-md-12">
                                    <div class="border-0 card card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <a href="/users/{{$data->user->username}}.html" class="avatar" style="background-image: url({{super_avatar($data->user)}})"></a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="/users/{{$data->user->username}}.html" style="margin-bottom:0;text-decoration:none;" class="card-title text-reset">{{$data->user->username}}</a>
                                                        <div style="margin-top:1px">创建时间:{{$data->created_at}}</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="/draft/{{$data->id}}" class="btn btn-primary"> 预览此帖 </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 markdown home-article">
                                                        <a href="/topic/{{$data->id}}/edit" class="text-reset">
                                                            <h2>{{$data->title}}</h2>
                                                        </a>
                                                        <span class="home-summary">{!! content_brief($data->post->content,get_options("topic_brief_len",250)) !!}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 5px">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-auto bottomLine">
                                                        <a href="/tags/{{$data->tag->id}}.html" style="text-decoration:none">
                                                            <div class="card-circle">
                                                                <img src="{{$data->tag->icon}}" alt="">
                                                                <span>{{$data->tag->name}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="ms-auto">
                                    <span class="text-muted" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__("app.pageviews")}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                        {{$data->view}}
                                    </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <div class="border-0 card card-body">
                                    <div class="text-center card-title">{{__("app.No more results")}}</div>
                                </div>
                            </div>
                        @endif
                        {!! make_page($page) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('headers')
    <link rel="stylesheet" href="{{ mix('plugins/Topic/css/app.css') }}">
@endsection
@section('scripts')
    <script src="/tabler/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{mix('plugins/Topic/js/core.js')}}"></script>
@endsection
