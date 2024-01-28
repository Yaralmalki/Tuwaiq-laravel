@extends('layouts.dashboard')
@section('content')
  <div class="container">
<h3 class="alert alert-dark text-center">اضافه مجموعات الأصناف</h3>
<div class="card ">
       <div class="card-body">
       <div class="row d-flex justify-content-center">
       <div class="col-sm-4 text-center">
       <form action="{{route('save')}}" method="post">
                @csrf
                <label for="Itemgroupname" > ادخل اسم المجموعة </label>
                <input type="text" class="form-control form-control-sm " name="Itemgroupname" id="Itemgroupname">
                <div class="row">

                <div class="text-center">
                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                </div>
            </form>
  <div class="card mt-2">
<div class="card-body">
<table class="table  table-bordered text-center ">
<thead>
<tr>
   <th>رقم المجموعة</th>
   <th>اسم المجموعة</th>
   <th colspan=2> اجراء </th>
</tr>
</thead>
<tbody>
@foreach($data as $row)
<tr>
   <td>{{$row->id}}</td>
   <td>{{$row->itemgroupname}}</td>
   <td><a href="{{ route('del',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
   <td><a href="{{route('edit',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div> 
</div>
</div>
</div>
@endsection
