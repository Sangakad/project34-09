@extends('layouts.masterbackend')
@section('con')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <strong>เพิ่มข้อมูล</strong> สินค้า
            </div>
            <div class="card-body card-block">
                <form action="" method="post" class="">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">ชื่อสินค้า</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name" class=" form-control-label">ราคาสินค้า</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="detail">รายละเอียดสินค้า</label>
                        <textarea class="form-control"id="detail" name="detail" style="height: 100px"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="detail">ประเภทสินค้า</label>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>กรุณาเลือกประเภทสินค้า</option>
                            <option value="1">ช้อนซ่อม</option>
                            <option value="2">กะทะ</option>
                            <option value="3">หม้อ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image" class=" form-control-label">รูปสินค้า</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>


                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> บันทึก
                </button>
                <a href="{{route('p.index')}}" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> กลับหน้าแรก
                </a>
            </div>
        </div>
    </div>
@endsection
