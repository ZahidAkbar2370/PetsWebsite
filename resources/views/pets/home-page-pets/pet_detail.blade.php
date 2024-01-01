@extends('layouts.master')
@section('title','Pet Profile')

@section('head')
<link rel="stylesheet" href="{{asset('/css/pet-profile.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
  .hr {
    display: block;
    border: 0;
    border-bottom: 1px solid #d2d1d3;
    margin-bottom: 20px;
  }
</style>
@endsection
@section('content')
<div class="container mt-5 mb-5 d-flex">
  <div class="card rounded" style="width: 100%">
    <div class=" d-flex justify-content-center">
        <img src="../images/featured_2.jpg" class="rounded" width="" height="400" />
        <div class="area2 px-3">
          <h4 class=" name mt-3 text-center">Milo</h4>
          <div class="hr"></div>
          <div class="d-flex">
            <p style="margin-right: 1.5rem;"><span class="back">Age: </span> Young</p>
            <p style="margin-right: 1.5rem;"><span class="back">Gender: </span> Female</p>
            <p style="margin-right: 1.5rem;"><span class="back">Size: </span> Small</p>
            <p style="margin-right: 1.5rem;"><span class="back">Status: </span> adoptable</p>
          </div>
          <div class="hr"></div>
          <div class="d-flex">
            <p style="margin-right: 1.5rem;"><span class="back">City: </span> Etobicoke</p>
            <p style="margin-right: 1.5rem;"><span class="back">State: </span> ON</p>
            <p style="margin-right: 1.5rem;"><span class="back">Country: </span> Canada</p>
          </div>
          <div class="hr"></div>
          <p class="information mt-3 text-justify">Please contact Reyan Pets Zone (reyanpetszone@gmail.com) for more information about this pet. Please Chat on Whatsapp <a href="#">+923081312527</a></p>
          <div class="d-flex justify-content-center mt-5">
            <div class="back"> </br> Return home? <a href="/" style="color:#6504b4">Home</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
@endsection