@extends('welcome')
@section('title')
    <div class="site-heading">
        <h1>Scholarship</h1>
        <hr class="small">
        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
    </div>
@endsection
@section('post')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($data as $result)
                <div class="post-preview">
                    <a href="{{URL::to('/single/'.$result->id.'')}}">
                        <h2 class="post-title">
                            {{$result->title}}
                        </h2>
                        <h3 class="post-subtitle">
                         {{$result->desc}}
                        </h3>
                    </a>
                    <p class="post-meta">Number Of sit: {{$result->numofsch}}</p>
                </div>
                @endforeach
                <hr>
                <hr>
                <!-- Pager -->
<!--                --><?php
//                    if ($result['from'] != 1){
//                        echo '<ul class="pager"><li class="next"><a href="">New Post</a></li></ul>';
//                    }else{
//
//                    }
//                    ?>
                <?php
                    echo $data;
                    ?>
{{--                <ul class="pager">--}}
{{--                    <li class="next">--}}
{{--                        <a href="{{URL::to('')}}">Older Posts &rarr;</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </div>
@endsection