@extends('Frontend.layouts.master')

@section('content')

<section class="banner_part">
    <img src="{{ asset('Frontend') }}/image/banner.jpg" style="width: 100%">
</section>

<!-- About us Section -->
<section class="about_us">
    <div class="container">
        <div class="col-md-4">
            <h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">News & Events Details</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('upload/News_images/'.$news->image) }}" style=" width:345px;height:400px; border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;">
                <p>Date: {{ date('d-m-Y',strtotime($news->date)) }}</p>
                <p>{{ $news->short_title }}</p>
                <p style="text-align: justify;">{{ $news->long_title }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
