@extends('welcome')
@section('title')
    <div class="site-heading">
        <h1>{{$da->title}}</h1>

    </div>
@endsection
@section('post')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2 class="section-heading">Brief description</h2>
                    <p>{{$da->desc}}</p>
                    <h2 class="section-heading">Host Institution(s)</h2>
                    <p>{{$da->institution}}</p>
                    <h2 class="section-heading">Fields of study</h2>
                    <p>{{$da->fstudy}}</p>
                    <h2 class="section-heading">Number of Scholarships:</h2>
                    <p>{{$da->numofsch}}</p>
                    <h2 class="section-heading">Target group</h2>
                    <p>{{$da->target}}</p>
                    <h2 class="section-heading">Scholarship value/inclusions</h2>
                    {{$da->value}}
                    <h2 class="section-heading">Eligibility</h2>
                    {{$da->eligibility}}
                    <h2 class="section-heading">Application instructions</h2>
                    {{$da->instructions}}
                    <h2 class="section-heading">Website</h2>
                    <p><a href="{{$da->website}}" target="_blank">{{$da->website}}</a></p>


                </div>
            </div>
        </div>
    </article>
@endsection