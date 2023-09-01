@extends('layouts.masterbackend')
@section('con')

<div class="col-lg-12">
    <div class="mt-3">
        <a href="{{route('p.create')}}" class="btn btn-success">+ เพิ่มข้อมูลสินค้า</a>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <strong class="card-title">สินค้า</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อสินค้า</th>
                        <th scope="col">ประเภทสินค้า</th>
                        <th scope="col">ราคาสินค้า</th>
                        <th scope="col">รายละเอียดสินค้า</th>
                        <th scope="col">รูปสินค้า</th>
                        <th scope="col">การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-warning">แก้ไข</a>
                            <a href="" class="btn btn-danger">ลบ</a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection