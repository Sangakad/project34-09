@extends('layouts.masterbackend')
@section('con')

<div class="col-lg-12">
    <div class="mt-3">
        <a href="{{route('pro.create')}}" class="btn btn-success">+ เพิ่มภาพโปรโมชั่น</a>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <strong class="card-title">โปรโมชั่น</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">รูปโปรโมชั่น</th>
                        <th scope="col">วันที่ทำรายการ</th>
                        <th scope="col">วันที่อัพเดทรายการ</th>
                        <th scope="col">การจัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
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