@extends('layout.master_view')

@section('title')
    Cv
@endsection


@section('content')
<div class="content">
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 offset-md-8 offset-md-2">
                                <form action="{{route('cv.store')}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name"><h5>Name</h5></label>
                                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email"><h5>Email</h5></label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                                        </div>




                                        <div class="form-group">
                                            <label for="address"><h5>Address</h5></label>
                                            <input type="name" name="address" class="form-control" id="address" placeholder="Enter Address" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile_number"><h5>Contact Number</h5></label>
                                            <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="social_url"><h5>Social Contact</h5></label>
                                            <input type="text" name="social_url" class="form-control" id="social_url" placeholder="Enter Social Contact" required>
                                        </div>



                                        <div class="form-group">
                                            <label for="image"><h5>Your Image</h5> </label>

                                            <div class="custom-file">
                                            <input type="file" accept=".png, .jpg, .jpeg" name="image" class="custom-file-input" id="image" required>
                                            <label class="custom-file-label" for="image">Drop your image file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cvfile"><h5>Cv</h5> </label>

                                            <div class="custom-file">
                                            <input type="file" accept=" .pdf, .doc" name="cvfile" class="custom-file-input" id="cvfile" required>
                                            <label class="custom-file-label" for="cvfile">Drop your cv image file in jpg format</label>
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <label for="post"><h5>Post</h5></label>
                                            <br><span> <b>PHP Devloper</b> </span>
                                            <input style="visibility: hidden;" type="post" name="post" class="form-control" value="PHP Devloper" id="post" placeholder="Enter Post">

                                        </div>




                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
