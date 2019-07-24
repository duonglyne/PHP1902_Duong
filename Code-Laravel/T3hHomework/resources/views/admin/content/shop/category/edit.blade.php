
@extends('admin.layouts.glance')

@section('title')
    Quản trị danh mục sản phẩm
@endsection

@section('content')
<h3>Sửa danh mục sản phẩm {{$cats->id.' : '.$cats->name}}</h3>
<div class="" style="margin: 20px 0">
    <a href="{{route('category.index')}}" class="btn btn-success">Quản lý danh mục</a>
</div>
<div class="container">
    <div class="row">
        <div class="form-three widget-shadow">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form name="category" action="{{url('admin/shop/category/'.$cats->id.'/update')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên danh mục</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{$cats->name}}" class="form-control1" id="focusedinput" placeholder="Tên danh mục">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fileinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" name="slug" value="{{$cats->slug}}" class="form-control1" id="fileinput" placeholder="slug">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <span class="input-group-btn">
                         <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="lfm-btn btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                            <a class="btn btn-warning remove-image">
                           <i class="fa fa-remove"></i> Xóa
                         </a>
                       </span>
                        <input id="thumbnail1" type="text" name="images[]" value="" class="form-control1" id="focusedinput" placeholder="Default Input">
                        <img id="holder1" style="margin-top:15px;max-height:100px;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thêm ảnh</label>
                    <div class="col-sm-8">
                        <a id="plus-image" class="btn btn-success">
                            <i class="fa fa-plus"></i> Thêm
                        </a></div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro"  id="txtarea1" cols="50" rows="4" class="form-control1">{{$cats->intro}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="txtarea2" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea2" cols="50" rows="4" class="form-control1">{{$cats->desc}}</textarea></div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

