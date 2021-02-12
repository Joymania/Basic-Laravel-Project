@extends('Frontend.layouts.master');

@section('content')

<section class="banner_part">
    <img src="{{ asset('Frontend') }}/image/banner.jpg" style="width: 100%">
</section>

<!-- About us Section -->
<section class="mission_vision">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Mission</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('upload/Mission_images/'.$mission->image) }}" style=" width:30%; height:80%; border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
                <p style="text-align: justify;"> {{ $mission->title }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
