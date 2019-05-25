@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục
@endsection
@section('contentadmin')
<section class="panel important">
        <h2>Sửa danh mục</h2>

          <div class="twothirds">
                <form action="/admin-danhmucblog-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                    <p><label>ID</label></p>
            <input class="form-control input-width" type="text" name="id" value="{{$datadanhmucblog[0]['id']}}" />
                </div>

            <label >Tên danh mục:</label>
            <input type="text" name="namecate"   placeholder="{{$datadanhmucblog[0]['tenloaiblog']}}" />
            <label >Tên danh mục không dấu:</label>
            <input type="text" name="namecate1"   placeholder="{{$datadanhmucblog[0]['tenkhongdau']}}" />

            <input type="submit" value="Sửa" />



          </div>


        </form>
      </section>
@endsection

