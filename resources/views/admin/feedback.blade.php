@extends('admin.layouts.main')

@section('title', 'Feedback')
@section('page', 'Feedback')

@section('content')
<div class="container-fluid py-4">
    <div class="table-responsive">
        <table class="table table-bordered" id="feedback-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>SUBJEK</th>
                    <th>PESAN</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
$(function() {
    $('#feedback-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.feedback') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nama', name: 'nama' },
            { data: 'email', name: 'email' },
            { data: 'subjek', name: 'subjek' },
            { data: 'pesan', name: 'pesan' }
        ]
    });
});
</script>
@endsection
