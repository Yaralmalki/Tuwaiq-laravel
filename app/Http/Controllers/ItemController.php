<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Itemgroup;
use App\Models\Items;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
class ItemController extends Controller{
  public function Showitemgroup()
{ 
$data=Itemgroup::All();
$count=$data->count();
return view('welcome',['data'=>$data,'count'=>$count]);
}
public function Checkout()
{ 
  $cartItems = Cart::all(); 
  $cartItems=DB::table('carts')
      ->join('items','carts.iditem','=','items.id')
      ->get();
   return view('checkout', ['cartItems'=>$cartItems]);
}
public function Addtocart($id)
{ 
 cart::create(['iditem'=>$id]);
 $idgroup=Session::get('id');
 $count=cart::count();
 Session::put('countitem',$count);
 return redirect('showproduct/'.$idgroup);
}
public function Showproduct($id)
{ 
$data=Items::where('itemgroupno',$id)
->get();
Session::put('id',$id);
return view('showproduct',['data'=>$data]);
}

public function GetItemGroup()
{ 
$data=Itemgroup::All();
return view('dashboard.addgroupsitem',['data'=>$data]);
}
public function SaveGroupItem(Request $request)
{
    $data=Itemgroup::create(['itemgroupname' => $request->Itemgroupname]);
      $data->save(); 
      return redirect('addgritem');
}
public function del($x)
{
  $item=Itemgroup::find($x);
  $item->delete();
  return redirect('addgritem');
}
public function Update(Request $request)
 {
   $item = Itemgroup::find($request->id);
        $item->itemgroupname = $request->namegroup;
        $item->save();
       return redirect('addgritem');
   }
public function Edit($x){
  $item=Itemgroup::where('id',$x)->first();
  return view('editgroupitem',['item'=>$item]);
}

public function GetItems(){ 
$data=Items::All();
return view('dashboard.controlpanel',['data'=>$data]);
}
public function SaveItems(Request $request){
  $img = time().'.'.$request->img->extension();
  $request->img->move(public_path('images'), $img);
    $data=Items::create([
        'itemname' => $request->itemname,
        'price' => $request->price,
        'qty' => $request->qty,
        'itemgroupno' => $request->itemgroupno, 
        'img' => $request->img
    ]);
      $data->save(); 
      return redirect('cpanel');
}
public function delt($x){
  $item=Items::find($x);
  $item->delete();
  return redirect('cpanel');
}
public function Updat(Request $request){
   $item = Items::find($request->id);
   $img = time().'.'.$request->img->extension();
   $request->img->move(public_path('images'), $img);
        $item->itemname=$request->itemname;
        $item->price=$request->price;
        $item->qty=$request->qty;
        $item->img = $img;
        $item->save();  
      return redirect('cpanel');   
}
public function Edt($x){
  $item=Items::where('id',$x)->first();
  return view('edititem',['item'=>$item]);
}


} 

