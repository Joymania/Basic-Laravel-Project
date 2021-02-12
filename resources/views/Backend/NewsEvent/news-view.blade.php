@extends('Backend.layouts.master');

@section('content')

    <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage NewsEvent</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">NewsEvent</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>
                    NewsEvent List

                      <a class=" float-right btn btn-success btn-sm" href="{{ route('newsevent.add') }}"><i class="fa fa-plus-circle"></i>Add Slider</a>


                </h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Date</th>
                            <th>Short Tytle</th>
                            <th>Long Tytle</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldata as $key=> $newsevent)
                        <tr>
                            <td>{{$key+1 }}</td>
                            <td>{{ date('d-m-y',strtotime($newsevent->date)) }}</td>
                            <td>{{ $newsevent->short_title }}</td>
                            <td>{{ $newsevent->long_title }}</td>
                            <td><img src="{{ (!empty($newsevent->image))?url('upload/News_images/'.$newsevent->image):url('upload/noImage.jpg') }}" alt="" style="width: 120px" height="130px"></td>
                            <td>
                                <a href="{{ route('newsevent.edit',$newsevent->id) }}" title="edit" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('newsevent.delete',$newsevent->id) }}" title="delete" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
              </div>
            </div>

          </section>
        </div>

      </div>
    </section>

  </div>

@endsection




