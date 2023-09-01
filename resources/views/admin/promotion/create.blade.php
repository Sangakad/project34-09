@extends('layouts.masterbackend')
@section('con')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <strong>เพิ่มข้อมูล</strong> โปรโมชั่น
            </div>
            <div class="card-body card-block">
                <form action="" method="post" class="">
        
                    <div class="form-group">
                        <label for="image" class=" form-control-label">รูปโปรโมชั่น</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> บันทึก
                </button>
                <a href="{{route('pro.index')}}" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> กลับหน้าแรก
                </a>
            </div>
        </div>
    </div>
@endsection
