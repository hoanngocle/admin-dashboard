@extends('admin.layouts.main', ['title' => 'Member Management'])

@section('custom-css')
    <link type="text/css" href="{{ asset('plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!-- begin page-header -->
    <h1 class="page-header">Member Management</h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="{{ URL::route('user.create') }}" class="btn btn-xs btn-icon btn-circle btn-success" ><i class="fa fa-plus"></i></a>
            </div>
            <h4 class="panel-title">List Member</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <table id="data-table-default" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="1%">ID</th>
                        <th width="1%" data-orderable="false">Avatar</th>
                        <th class="text-nowrap">Member Code</th>
                        <th class="text-nowrap">Username</th>
                        <th class="text-nowrap">Email</th>
                        <th class="text-nowrap">Date Of Birth</th>
                        <th class="text-nowrap">Gender</th>
                        <th class="text-nowrap">Coin</th>
                        <th class="text-nowrap">Level</th>
                        <th class="text-nowrap">Status</th>
                        <th width="10%" data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listUser as $key => $item)
                    <tr class="odd gradeX">
                        <td width="1%" class="f-s-600 text-inverse">{{ $item->id }}</td>
                        <td width="1%" class="with-img"><img src="{{ asset("img/user/$item->avatar") }}" class="img-rounded height-30" /></td>
                        <td>{{ $item->member_code }}</td>
                        <td>{{ $item->nickname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->gender }}</td>
                        <td width="5%">{{ $item->coin }}</td>
                        <td width="5%">{{ $item->level }}</td>
                        <td width="5%">{{ $item->is_online }}</td>
                        <td width="10%" class="with-btn" nowrap>
                            <a href="{{ URL::route('user.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger" data-click="swal-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->
@endsection

@section('custom-js')
    <script src="{{ asset('plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/admin/sweet-notification.js') }}"></script>

    <script src="{{ asset('js/demo/table-manage-default.demo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            TableManageDefault.init();
            sweetNotification.init();
        });
    </script>
@endsection