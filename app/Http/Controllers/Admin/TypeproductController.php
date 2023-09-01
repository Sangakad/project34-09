<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Typeproduct;

class TypeproductController extends Controller
{
    public function index(){
        $types = Typeproduct::all();
        return view('admin.typeproduct.index',compact('types'));
    }

    public function create(){
        return view('admin.typeproduct.create');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required|unique:typeproducts|max:255',
        ],[
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
        ]);
        $tpyes = new Typeproduct();
        $tpyes->name = $request->name;
        $tpyes->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','');
        return redirect()->route('t.index');

    }

    public function edit($type_id){
        $type = Typeproduct::find($type_id);
        return view('admin.typeproduct.edit',compact('type'));

    }

    public function update(Request $request, $type_id){
        $request->validate([
            'name' => 'required|max:255',
        ],[
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
        ]);
        $types = Typeproduct::find($type_id);
        $types->name = $request->name;
        $types->save();
        alert()->success('แก้ไขข้อมูลสำเร็จ','');
        return redirect()->route('t.index');

    }

    public function delete($type_id){
        $types = Typeproduct::find($type_id);
        $types->delete();
        alert()->success('ลบข้อมูลสำเร็จ','');
        return redirect()->route('t.index');
    }


}
