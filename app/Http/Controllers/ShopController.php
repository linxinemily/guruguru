<?php

namespace App\Http\Controllers;

use App\Models\Shop;    //引入library的樣式
use Illuminate\Http\Request; 

class ShopController extends Controller
{
    public function index()
    {
    	$shops = Shop::all(); //取出此class(modle)當中的所有資料存入$shops變數
    	// dd($shops); →直接顯示出陣列在頁面上（JSON格式）
    	return view('shops.index', compact('shops')); //在index.blade.php頁面上以陣列方式呈現此$shops變數
    }


    public function create()
    {
    	return view('shops.create');
    }

    public function store(Request $request)//收資料
    {
    	$data = $request->all();

        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ], [ 'name.required' => 'fsdfasdfafsafs' ]);

    	$shop = new Shop;
    	$shop->name = $data['name'];
    	$shop->address = $data['address'];
    	$shop->save();

    	return redirect('/drinks/create');
    }

    public function edit(Shop $shop) //Shop為$shop此變數實體化後（＝物件）的類別，變數名稱可隨便取，但在這裡因為有連接入口有設定此變數，所以必須和入口的變數一樣
    {
        // dd($shop);
        // $shop = Shop::find($shop);
        // $shop = Shop::find($id);
    	return view('shops.edit', compact('shop'));
    }

    public function update(Request $request, Shop $shop)
    {
        // 1. 拿到資料
        $data = $request->all();

        // 2. 更新資料
        $shop->name = $data['name'];
        $shop->address = $data['address'];
        $shop->save();
 
        // 3. 把使用者返回首頁
        return redirect('/');
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();

        return redirect('/');
    }
}
