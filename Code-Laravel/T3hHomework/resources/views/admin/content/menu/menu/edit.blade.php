
@extends('admin.layouts.glance')

@section('title')
    Sửa menu
@endsection

@section('content')
    <h3>Sửa menu {{$menu->id.' : '.$menu->name}}</h3>
    <div class="" style="margin: 20px 0">
        <a href="{{url('admin/menu')}}" class="btn btn-success">Quản lý menu</a>
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
                <form name="category" action="{{url('admin/menu/'.$menu->id.'/update')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Tên</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" value="{{$menu->name}}" class="form-control1" id="focusedinput" placeholder="Tên danh mục">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="menuinput" class="col-sm-2 control-label">Vị trí</label>
                        <div class="col-sm-8">
                            <select name="location" id="menuinput">
                                <option value="0">Không hiện</option>
                                @foreach($locations as $key_local => $location)
                                    <option value="{{$key_local}}" {{($key_local == $menu->location)? 'selected' : ''}}>{{$location}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

