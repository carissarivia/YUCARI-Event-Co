@extends('admin.layouts.main')

@section('title', 'Data Pelanggan')
@section('page', 'Data Pelanggan')

@section('content')
<div class="container-fluid py-4">
    <div class="table-responsive">
        <table class="table table-bordered" id="customers-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
$(function() {
    $('#customers-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.customers') !!}',
        columns: [
            { data: 'no', name: 'no' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
            { data: 'address', name: 'address' }
        ]
    });
});
</script>
@endsection
