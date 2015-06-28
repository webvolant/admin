@extends('abadmin::admin')
<!--
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@stop
-->

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Обзорное
            <small>окно</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Статистика</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <table id="data_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Роль</th>
                    <th>Статус</th>
                    <th>Управление</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->name !!}</td>
                            <td>{!! $item->email !!}</td>
                            <td>{!! User::getStrRole($item->role) !!}</td>
                            <td>{!! User::getStrStatus($item->status) !!}</td>
                            <td>
                                <a href='{{ URL::route("user/add", array($item->id)) }}' class="btn btn-primary btn-flat"><i class="fa fa-wrench fa-fw"></i></a>
                                <a href='{{ URL::route("user/delete", array($item->id)) }}' class="btn btn-danger btn-flat"><i class="fa fa-trash-o fa-fw"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Роль</th>
                    <th>Статус</th>
                    <th>Управление</th>
                </tr>
                </tfoot>
                </table>

            </div><!-- /.box-body -->
            <div class="box-footer">

            </div><!-- /.box-footer-->
        </div><!-- /.box -->

    </section><!-- /.content -->
@stop