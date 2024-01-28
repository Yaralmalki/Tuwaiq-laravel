@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-dark text-center">تعديل بيانات الأصناف </h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                 <form action="{{ route('updat') }}" method="post" enctype="multipart/form-data">
                        @csrf
                     <input type="hidden" name="id" value="{{ $item->id }}">                
                            <label for="itemname" class="p-2"> ادخل اسم المنتج </label>
                            <input type="text" class="form-control form-control-sm" name="itemname" id="itemname" value="{{ $item->itemname }}">
                            <label for="price" class="p-2"> ادخل سعر المنتج </label>
                            <input type="text" class="form-control form-control-sm" name="price" id="price" value="{{ $item->price }}">
                            <label for="qty" class="p-2"> ادخل كمية المنتج </label>
                            <input type="text" class="form-control form-control-sm" name="qty" id="qty" value="{{ $item->qty }}">
                          <label for="itemgroupno" class="p-2"> ادخل رقم المجموعة </label>
                         <input type="text" class="form-control form-control-sm pt-2" name="itemgroupno" id="itemgroupno" value="{{ $item->itemgroupno }}">
                         <label for="img" class="p-2"> ارفق الصورة </label>    
                         <input type="file" class="form-control form-control-sm pt-2" name="img" id="img" accept="image/*">
                         <div class="row">
                                <div class="text-center">
                                    <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
