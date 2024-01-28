@extends('layouts.app')

@section('content')

<div class="container">
<div class="row d-flex justify-content-center">
<h3 class="alert alert-dark text-center">تعديل بيانات المجموعة </h3>
<div class="col">
<div class="card">
<div class="card-body d-flex justify-content-center">
<div class="row d-flex justify-content-center">
<form action="{{route('update')}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$item->id}}">
                <label for="x1" > ادخل اسم المجموعة </label>
                <input type="text" name="namegroup" id="x1" value="{{$item->Itemgroupname}}">                <div class="row">
                <div class="text-center">
                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                </div>
            </form>
</div>
</div>
</div>
</div>
</div>
@endsection