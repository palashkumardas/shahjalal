@extends('master')
@section('content')
@section('title','Privacy & Policy')
  <main id="main" style="margin-top: 80px;">

   <div class="container">

    <div class="container">
      <div class="row">
        <div class="col-md-12 border my-5">
    <h1 class="mt-5"><center> Privacy Policy</center></h1>
    
      <p>{!! $privacy->description !!}</p>

      
    </div><!--end col-->
    </div> <!--end row-->
    </div><!--end container-->
      
   

   </div>

  </main><!-- End #main -->

@endsection