@extends('layouts.app')
@section('content')
<?php $c = 0; ?>
<div class="container">
    <h1 class="alert alert-dark text-center">Welcome to pet</h1>
    @while($c < $count)
    <div class="row text-center d-flex align-items-center justify-content-center">
        <div class="col-sm-4 pt-4 text-center">
        <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->itemgroupname}}</h4>
                    <i class="fa fa-cat fa-2x" ></i>
                </div>
            </div>
        </a>
        </div>
        
        <?php $c++;?>
        @if($c < $count)
        <div class="col-sm-4 pt-4 text-center">
        <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->itemgroupname}}</h4>
                    <i class="fa fa-cat fa-2x" ></i>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif
        @endwhile
        
    </div>

</div>

@endsection
