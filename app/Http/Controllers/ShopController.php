<?php

namespace App\Http\Controllers;

use App\Models\Shop;    //引入library的樣式
use Illuminate\Http\Request; 

class ShopController extends Controller
{
    public function index()
    {
    	$shops = Shop::all(); //取出此class(modle)當中的所有資料
    	// dd($shops); →直接顯示出陣列在頁面上（JSON格式）
    	return view('shops.index', compact('shops')); //在index.blade.php頁面上呈現此陣列
    }


    public function create()
    {
    	return view('shops.create');
    }

    public function store(Request $request)//收資料
    {
    	$data = $request->all();

    	$shop = new Shop;
    	$shop->name = $data['name'];
    	$shop->address = $data['address'];
    	$shop->save();

    	return redirect('/');
    }

    public function edit(Shop $shop)
    {
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
