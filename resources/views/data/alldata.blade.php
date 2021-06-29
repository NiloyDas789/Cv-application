@extends('layout.master_admin')

@section('title')
    All Cv
@endsection



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cv List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-lg-12">
              <div class="card">
              <div class="card-header">

                <div class=" d-flex justify-content-between align-items-center">
                <h3 class="card-title">Cv list</h3>

                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>

                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Contact Number</th>
                      <th>Social Url</th>
                      <th>Post</th>
                      <th>Cv File</th>




                    </tr>
                  </thead>
                  <tbody>

                  @foreach($cvs as $cv)
                    <tr>

                      <td>
                      <div style="max-width: 70px; max-height: 70px; overflow:hidden" >
                      <img src="{{asset($cv->image)}}" class="img-fluid" alt="">
                      </div>
                      </td>
                      <td>{{$cv->name}}</td>
                      <td>{{$cv->email}}</td>
                      <td>{{$cv->address}}</td>
                      <td>{{$cv->mobile_number}}</td>
                      <td>{{$cv->social_url}}</td>
                      <td>{{$cv->post}}</td>
                      <td>

                    <a href="{{asset($cv->cvfile)}}"> Download </a>


                    </td>



                    </tr>
                  @endforeach


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$cvs->links()}}
                    </div>
              </div>

            </div>
            </div>
            </div>
            </div>
            </div>
            </div>




@endsection
