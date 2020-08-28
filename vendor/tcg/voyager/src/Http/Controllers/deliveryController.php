<?php

namespace TCG\Voyager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;

class deliveryController extends Controller
{
  public function loadOrders(){
    $orders = DB::table('orders')
      ->where('status',2)
      ->join('users', 'orders.user_email', '=', 'users.id')
      ->select('orders.id', 'orders.created_at', 'orders.payment_way',
      'users.name', 'users.phone', 'users.longitude', 'users.latitude'
      )
     ->paginate(10);
    return Voyager::view('voyager::delivery.orders')->with('orders',$orders);
  }

  public function OrderDetalis(Request $req){

    $sum = DB::table('order_details')
    ->where('order_id',$req->id)
    ->join('products','order_details.product_id','=','products.id')
    ->select('price')
    ->sum('price');

    $products = DB::table('order_details')
    ->where('order_id',$req->id)
    ->join('products','order_details.product_id','=','products.id')
    ->join('branches','branch_id','=','branches.id')
    ->join('weights','weight_id','=','weights.id')
    ->join('orders','order_details.order_id','=', 'orders.id')
    ->join('users','user_email','=','users.id')
    ->select('products.id','products.name','products.price','products.image_url','branches.name as branch_name','weights.name as weight_name','orders.id as order_id','users.phone')
    ->orderBy('products.id')
    //->sum('price');
    ->paginate(10);
    //return $products;
    return Voyager::view('voyager::delivery.orderDetails')->with('products',$products)->with('sum',$sum);
  }
  public function FinishOrder($id,$status){
    DB::table('orders')
    ->where('id',$id)
    ->update(['status'=>$status]);
    return redirect('/admin/delivery/orders');
  }
  public function LoadMap(Request $request) {
    
      $position = collect([['Longitude'=>$request->longitude,'latitude'=> $request->latitude]]);
      //return $position;
      return Voyager::view('voyager::delivery.map')->with('position', $position);
           
  }
  public function orderMap(){

    $orders = DB::table('orders')
      ->where('status',4)
      ->join('users', 'orders.user_email', '=', 'users.id')
      ->select('orders.id', 'orders.created_at', 'orders.payment_way',
      'users.name', 'users.phone', 'users.longitude', 'users.latitude'
      )
     ->paginate(10);
      //return $orders;
    return Voyager::view('voyager::delivery.orderMap')->with('orders',$orders);
  }

}