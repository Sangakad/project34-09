@extends('layouts.masterbackend')
@section('con')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <strong>แก้ไขข้อมูล</strong> ประเภทสินค้า
            </div>
            <div class="card-body card-block">
                <form action="{{url('admin/typeproduct/update/'.$type->type_id)}}" method="post" class="">
                        @csrf
                    <div class="form-group">
                        <label for="name" class=" form-control-label">ชื่อประเภทสินค้า</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $type->name }}">
                    </div>  
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary btn-sm" value="อัพเดทข้อมูล">
                <a href="{{route('t.index')}}" class="btn btn-danger btn-sm">
                    กลับหน้าแรก
                </a>
            </div>
        </form>
        </div>
    </div>
@endsection
