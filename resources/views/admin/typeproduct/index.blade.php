@extends('layouts.masterbackend')
@section('con')

<div class="col-lg-12">
    <div class="mt-3">
        <a href="{{route('t.create')}}" class="btn btn-success">+ เพิ่มประเภทสินค้า</a>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <strong class="card-title">ประเภทสินค้า</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อประเภทสินค้า</th>
                        <th scope="col">วันที่ทำรายการ</th>
                        <th scope="col">วันที่อัพเดทรายการ</th>
                        <th scope="col">การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($types as $t)
                   <tr>
                    <th scope="row">{{ $t->type_id }}</th>
                    <td>{{ $t->name }}</td>
                    <td>{{ $t->created_at }}</td>
                    <td>{{ $t->updated_at }}</td>
                    <td>
                        <a href="{{ url('admin/typeproduct/edit/'.$t->type_id) }}" class="btn btn-warning">แก้ไข</a>
                        <a href="{{ url('admin/typeproduct/delete/'.$t->type_id) }}" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
                   @endforeach
                   
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection