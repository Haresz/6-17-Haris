@extends('layouts.main')

@section('container')
<div class="title-top mb-5 ">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form>
  <div class="from-floatin  mb-3">
    <input type="text" class="form-control" id="inputname" placeholder= "Nama">
    <label for="inputname" class="form-label"></label>
  </div>
  <div class="from-floatin  mb-3">
    <input type="email" class="form-control" id="inputemail" placeholder= "Email">
    <label for="inputemail" class="form-label"></label>
  </div>
  <div class="from-floatin  mb-3">
    <textarea class="form-control" placeholder= "Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2"></label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection