@extends('layout.main')

@section('title','About')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
            <h1 class="mt-4">About <?php echo $nama;?></h1>
            <h1 class="mt-4">About <?= $nama;?></h1>
            <h1 class="mt-4">About {{$nama}} </h1>
            </div>
        </div>
    </div>
@endsection