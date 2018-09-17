<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Session;

//Search
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Response;

class UserController extends Controller
{
    
    function getHome(){
    	if(Session::has('idgh')){
            $cart_id = Session::get('idgh');
        } else {
            $cart_id = $this->getIDCart();
        }

        $product_cart = DB::table('product_cart')
            ->join('product', 'product_cart.idSanPham', '=', 'product.MaSP')
            ->where('product_cart.idGioHang', '=', $cart_id)
            ->select('product.*', 'product_cart.SoLuong')->get();

        return view('home', ['product_cart' => $product_cart, 'cart_id' => $cart_id]);
    }
    function getCart(){
        if(Session::has('idgh')){
            $cart_id = Session::get('idgh');
        } else {
            $cart_id = $this->getIDCart();
        }
    	
        $product_cart = DB::table('product_cart')
            ->join('product', 'product_cart.idSanPham', '=', 'product.MaSP')
            ->where('product_cart.idGioHang', '=', $cart_id)
            ->select('product.*', 'product_cart.SoLuong')->get();
        return view('cart', ['product_cart' => $product_cart]);
    }
    function postCart(){
        if(Session::has('idgh')){
            $cart_id = Session::get('idgh');
        } else {
            $cart_id = $this->getIDCart();
        }

        $product_cart = DB::table('product_cart')
            ->join('product', 'product_cart.idSanPham', '=', 'product.MaSP')
            ->where('product_cart.idGioHang', '=', $cart_id)
            ->select('product.*', 'product_cart.SoLuong')->get();
    	return view('order',['product_cart' => $product_cart]);
    }
    function getProduct(){
    	if(Session::has('idgh')){
            $cart_id = Session::get('idgh');
        } else {
            $cart_id = $this->getIDCart();
        }

        $product_cart = DB::table('product_cart')
            ->join('product', 'product_cart.idSanPham', '=', 'product.MaSP')
            ->where('product_cart.idGioHang', '=', $cart_id)
            ->select('product.*', 'product_cart.SoLuong')->get();

        $products = DB::table('product')->paginate(12);
        return view('product', ['products' => $products, 'product_cart' => $product_cart]);
    }
    function addToCart(Request $request)
    {
        if(Session::has('idgh')){
            $cart_id = Session::get('idgh');
        } else {
            $cart_id = $this->getIDCart();
        }
        $idProduct = $request->get('idProduct');

        $arrayProduct = DB::table('product_cart')
            ->where('idgiohang', '=', $cart_id)
            ->where('idsanpham', '=', $idProduct)
            ->select("*")->get();

        if ($arrayProduct->count() == 0) {
            DB::table('product_cart')->insert([
                ['idgiohang' => $cart_id, 'idsanpham' => $idProduct, 'soluong' => '1']
            ]);
        } else {
            foreach ($arrayProduct as $product) {
                $numProduct = $product->SoLuong;
                $id = $product->ID;
            }

            DB::table('product_cart')
                ->where('id', $id)
                ->update(['soluong' => $numProduct + 1]);
        }
        return "Success";
    }
    function getTest(){
    	return view('admin_listProduct');
    }
    
    function postOrder(Request $request){
        if(Session::has('idgh')){
            $idGioHang = Session::get('idgh');
        } else {
            $idGioHang = $this->getIDCart();
        }
    	$name = $request->name;
    	$phone = $request->phone;
    	$email = $request->email;
    	$address = $request->address;
    	$message = $request->message;
    	$data1 = [
    		'TrangThai'=>'Dat Hang',
    		'NgayBan'=>date("Y-m-d"),
    		'MaThue'=>123
    	];
    	$idDH = DB::table('donhang')->insertGetId($data1);
    	$data2 = [
    		'MaDH'=>$idDH,
    		'MaGH'=>$idGioHang,
    		'TenKH'=>$name,
    		'Sdt'=>$phone,
    		'Email'=>$email,
    		'DiaChiNhanHang'=>$address,
    		'ChuThich'=>$message
    	];
    	DB::table('donhangchitiet')->insert($data2);
        DB::table('giohang')->where('MaGH', '=', $idGioHang)->delete();
        Session::forget('idgh');
    	return redirect('home');

    }

    //Gio hang
    function getIDCart()
    {
        $cartidnew = DB::table('giohang')
                ->where('MaGH', DB::raw("(select max(MaGH) as maxid from giohang)"))
                ->select('MaGH')->get()[0]->MaGH + 1;

        $cart_id = Session::has('idgh') ? Session::get('idgh') : $cartidnew;

        if ($cart_id == $cartidnew) {
            DB::table('giohang')->insert([
                ['MaGH' => $cartidnew, 'MaKH' => 1, 'NgayMua' => '21/05/2018', 'Mota' => 'ABC']
            ]);
            Session::put('idgh', $cart_id);
        }

        return $cart_id;
    }

    function removeProductInCart(Request $request){
        if(Session::has('idgh')){
            $cart_id = Session::get('idgh');
        } else {
            $cart_id = $this->getIDCart();
        }
        $idProduct = (int)$request->get('idProduct');

        DB::table('product_cart')
            ->where('idgiohang','=',$cart_id)
            ->where('idsanpham','=',$idProduct)
            ->delete();
        return "Success";
    }

    // <==================phoc code==================>
     
    function getLogin(){
        return view('login');
    }

    function postLogin(Request $request){
        $username = $request->user;
        $password = $request->pass;
        $data = [
            ['username','=',$username],
            ['password','=',$password]
        ];
        $row = DB::table('taikhoan')->where($data)->get()->count();
        if($row>0){
            $user = DB::table('taikhoan')->where($data)->first();
            $name = $user->username;
            Session::put('username',$name);
            return redirect('admin_listProduct')->with('name',$name);
        }
    }

    function getAdmin_addProduct(){
        return view('admin_addProduct');
    }


    function getEditProduct($id){    
        $product = DB::table('product')->where('MaSP', $id)->first();
        return view('admin_editProduct',['product'=>$product,'id'=>$id]);
    }

     function postEditProduct($id,Request $request){
       $tenSP = $request->ten_sp;
       $giaSP = $request->gia_sp;  
       $khuyenMai = $request->khuyen_mai;
       $moTa = $request->mo_ta;
        DB::table('product')
            ->where('MaSP', $id)
            ->update(['TenSP'=> $tenSP,  
                      'Gia'=>$giaSP,
                      'KhuyenMai'=> $khuyenMai,
                      'MoTa'=>$moTa
                      
                    ] );
            
         
        $products = DB::table('product')->paginate(12);
        return view('admin_listProduct',['products'=>$products,'id'=>$id]);
    }

    function getDeleteProduct ($id,Request $request){
        DB::table('product')->where('MaSP', '=', $id)->delete();   
        $products = DB::table('product')->paginate(12);
        return view('admin_listProduct',['products'=>$products,'id'=>$id]);
    }

    function postAddProduct(Request $request){
        $tenSP = $request->ten_sp;
        $giaSP = $request->gia_sp;
        $maNCC = $request->ma_ncc;
        $maDM = $request->ma_dm;
        $anhSP=$_FILES['pictures']['name'][0];
        $khuyenMai = $request->khuyen_mai;
        $moTa = $request->mo_ta;
        
        DB::table('product')->insert(
            ['TenSP'=> $tenSP,
            'MaDM'=>$maDM,
            'Gia'=>$giaSP,
            'KhuyenMai'=> $khuyenMai,
            'MoTa'=>$moTa,
            'MaNCC'=> $maNCC,
            'Anh'=>$anhSP
        ]   
        );
        return redirect('admin_listProduct');  
    }
    
    function getAdmin_listProduct(){
        $products = DB::table('product')->paginate(10);
        return view('admin_listProduct',['products'=>$products]);
       
    }
    function getAdmin_listOrder(){
        $donhangchitiets = DB::table('donhangchitiet')->paginate(12);
        return view('admin_listOrder',['donhangchitiets'=>$donhangchitiets]);
    }
    //search
    function searchController(){
        $term = Input::get('key');
        $products = DB::table('product')
            ->where('TenSP', 'LIKE', '%'.$term.'%')->paginate(10);

        if(Session::has('idgh')){
            $cart_id = Session::get('idgh');
        } else {
            $cart_id = $this->getIDCart();
        }

        $product_cart = DB::table('product_cart')
            ->join('product', 'product_cart.idSanPham', '=', 'product.MaSP')
            ->where('product_cart.idGioHang', '=', $cart_id)
            ->select('product.*', 'product_cart.SoLuong')->get();
        return view('product', ['products' => $products, 'product_cart' => $product_cart]); 
    }
use AuthenticatesUsers;
    function test(){
        $term = Input::get('term');
        $results = array();
        $queries = DB::table('product')
            ->where('TenSP', 'LIKE', '%'.$term.'%')->get();

        foreach ($queries as $query)
        {
            $ten = $query->TenSP;
            $results[] = $ten;
        }
        return $results;
    }
}
