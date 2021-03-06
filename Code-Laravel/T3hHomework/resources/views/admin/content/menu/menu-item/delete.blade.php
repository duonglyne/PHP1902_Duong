@extends('admin.layouts.glance')

@section('title')
    Xóa menu item
@endsection

@section('content')
    <h3>Xóa menu {{$menuItem->id.' : '.$menuItem->name}}</h3>

    <div class="container ">
        <div class="row">
            <div class="">
                <form name="category" action="{{url('admin/menu-item/'.$menuItem->id.'/destroy')}}" method="post" class="">
                    @csrf
                    <div class="">
                        <button type="submit" class="btn btn-primary ">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="" style="margin: 20px 0">
        <a href="{{url('admin/menu-item')}}" class="btn btn-success">Quản lý menu item</a>
    </div>

@endsection
