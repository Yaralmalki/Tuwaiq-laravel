<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Itemgroup;
use Auth;
use Illuminate\Support\Facades\Session;
class DashboardController extends Controller
{
public function __construct() {
  $this->middleware('auth');

}
public function logout() {
  Auth::logout();
  return redirect('login');
}
    public function DisplayaddItemsgroup(){
      $data=Itemgroup::All();
      return view('dashboard.addgroupsitem',['data'=>$data]);
    }
    public function DisplayItems(){
    $data=DB::table('itemgroups')
      ->join('items','itemgroups.id','=','items.itemgroupno')
      ->get();
      return view('dashboard.controlpanel',['data'=>$data]);
  }
}
