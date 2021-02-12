@extends('Frontend.layouts.master');

@section('content')

<section class="banner_part">
    <img src="{{ asset('Frontend') }}/image/banner.jpg" style="width: 100%">
</section>

<!-- About us Section -->
<section class="nesw_events" style="background: #ddd">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-top: 15px;">
                <h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
            </div>
            <div class="col-md-9" style="padding-top: 15px;">
                <table class="table table-striped table-bordered table-hover table-md table-warning">
                    <thead class="thead-dark">
                        <tr>
                            <th>SL</th>
                            <th>Date</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newses as $key =>$news)
                            <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ date('d-m-Y',strtotime($news->date)) }}</td>
                            <td><img src="{{ asset('upload/News_images/'.$news->image) }}" style="width:200px; height:100px; "></td>
                            <td>{{ $news->short_title }}</td>
                            <td><a href="{{ route('newsdetails',$news->id) }}" class="btn btn-info">Details</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
