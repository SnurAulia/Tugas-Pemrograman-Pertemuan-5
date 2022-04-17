@extends('layout.app')

@section('title','Friends')

@section('content')
<form action="/friends" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nomor Telpon</label>
    <input type="text" class="form-control" name="no_tlp" id="no_tlp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection