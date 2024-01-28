@extends('layouts.app')
@section('content')
<div class="container">
@foreach($data as $row)
<div class="card ">
    <div class="card-body ">
        <div class="row ">
            <div class="col"> 
            <img src="{{ asset('/images/' . $row->img) }}" alt="image">
            </div>
            <div class="col text-start">
               <h1 class=" text-dark">{{$row->itemname}}</h1> 
               <h5> السعـر {{$row->price}}</h5>
               </div>
               <div class="row ">
                <div class=" col-sm text-center">
                   <a href="{{route('addtocart',['id'=>$row->id])}}" class="btn btn-success">Add to card</a>
              </div>
            </div>
        </div>
    </div>
</div>
@endforeach
            </div>
@endsection
