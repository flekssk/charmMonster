@extends('layouts.admin.layout')

@section('header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.order.menu')
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Список заказов</div>
                </div>
                <div class="box-body">

                </div>
            </div>
        </div>
    </div>
@endsection