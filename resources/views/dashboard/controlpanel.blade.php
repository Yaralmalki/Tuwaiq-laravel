@extends('layouts.dashboard')
@section('content')
  <div class="container">
<h3 class="alert alert-dark text-center">تفاصيل المنتـجـات</h3>
<div class="card">
       <div class="card-body">
         <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <form action="{{route('SaveItems')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="itemname" class="p-2"> ادخل اسم المنتج </label>
                <input type="text" class="form-control form-control-sm " name="itemname" id="itemname">
                <label for="price" class="p-2"> ادخل سعر المنتج </label>
                <input type="text" class="form-control form-control-sm " name="price" id="price">
                <label for="qty" class="p-2"> ادخل كمية المنتج </label>
                <input type="text" class="form-control form-control-sm " name="qty" id="qty">
                <label for="itemgroupno" class="p-2"> ادخل رقم المجموعة </label>
                <input type="text" class="form-control form-control-sm " name="itemgroupno" id="itemgroupno">
                <label for="img" class="p-2"> ارفق الصورة </label>    
                <input type="file" class="form-control form-control-sm pt-2" name="img" id="img" accept="image/*">
                <div class="row">
                  <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                </div>
        </div>
    </div>
<div class="card mt-2">
<div class="card-body">
<table class="table  table-bordered text-center ">
<thead>
<tr>
<th>اسم المجموعة</th>
   <th> رقم المنتج</th>
   <th>اسم المنتج</th>
   <th> سعر المنتج</th>
   <th> كمية المنتج</th>
<th colspan=2> اجراء </th>
</tr>
</thead>

<tbody>
 @if($data!=null)
 @foreach($data as $row)
<tr>
<td>{{ $row->itemgroupname }}</td>
<td>{{ $row->id }}</td>
<td>{{ $row->itemname }}</td>
<td>{{ $row->price }}</td>
<td>{{ $row->qty }}</td>
<td><a href="{{ route('delt',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
<td><a href="{{route('edt',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>

</tr>
@endforeach
@endif
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection
