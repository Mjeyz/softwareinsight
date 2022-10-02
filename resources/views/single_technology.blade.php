@extends('layouts.services_app')
@section('content')
    <div class="inside-hero-three bg-color">
        <img src="{{url('images/shape/shape_35.svg') }}" alt="" class="shapes shape-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="page-title font-recoleta" >{{ ucfirst($technology->banner_heading) }}</h2>
                </div>
                <div class="col-xxl-5 col-md-6 ms-auto">
                    <p>{!! $technology->banner_paragraph !!}</p>
                </div>
            </div>
        </div>
    </div> <!-- /.inside-hero-three -->

    <div class="tsi-feature-section-three mt-200 lg-mt-80">
        <div class="container">
            <div class="techs-main-heading-and-paragraph pb-100">
                <div class="title-style-seven pt-30 pb-30">
                    <h2 class="title">{!! $technology->main_content_heading !!}</h2>
                </div>
                <p>{!! $technology->main_content_paragraph !!}</p>
            </div>
            {!! $technology->technologies_main_content !!}
        </div>
    </div> <!-- /.tsi-feature-section-three -->
@endsection