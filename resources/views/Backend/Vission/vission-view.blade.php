@extends('Backend.layouts.master');

@section('content')

    <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Vission</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vission</li>
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
                    Vission List

                      <a class=" float-right btn btn-success btn-sm" href="{{ route('vission.add') }}"><i class="fa fa-plus-circle"></i>Add Vission</a>


                </h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldata as $key=> $vission)
                        <tr>
                            <td>{{$key+1 }}</td>
                            <td>{{ $vission->title }}</td>
                            <td><img src="{{ (!empty($vission->image))?url('upload/Vission_images/'.$vission->image):url('upload/noImage.jpg') }}" alt="" style="width: 120px" height="130px"></td>
                            <td>
                                <a href="{{ route('vission.edit',$vission->id) }}" title="edit" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('vission.delete',$vission->id) }}" title="delete" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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




