@extends('admin.layouts.main')

@section('title', 'Data Penjualan')
@section('page', 'Data Penjualan')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Data Penjualan</h6>
                    <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-target="#addDataModal">Add Data</button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="sales-table" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Acara</th>
                                    <th>Nama Customer</th>
                                    <th>Tiket Terjual</th>
                                    <th>Harga Per Tiket</th>
                                    <th>Total Penjualan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DataTables will fill this table body -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Data Modal -->
<div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDataModalLabel">Add Data Penjualan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-data-form">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_acara" class="form-label">Nama Acara</label>
                        <input type="text" class="form-control" id="nama_acara" name="nama_acara" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_customer" class="form-label">Nama Customer</label>
                        <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
                    </div>
                    <div class="mb-3">
                        <label for="tiket_terjual" class="form-label">Tiket Terjual</label>
                        <input type="number" class="form-control" id="tiket_terjual" name="tiket_terjual" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_per_tiket" class="form-label">Harga Per Tiket</label>
                        <input type="number" class="form-control" id="harga_per_tiket" name="harga_per_tiket" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Data Modal -->
<div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModalLabel">Edit Data Penjualan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edit-data-form">
                    <input type="hidden" id="edit-id" name="id">
                    <div class="mb-3">
                        <label for="edit-tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="edit-tanggal" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-nama_acara" class="form-label">Nama Acara</label>
                        <input type="text" class="form-control" id="edit-nama_acara" name="nama_acara" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-nama_customer" class="form-label">Nama Customer</label>
                        <input type="text" class="form-control" id="edit-nama_customer" name="nama_customer" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-tiket_terjual" class="form-label">Tiket Terjual</label>
                        <input type="number" class="form-control" id="edit-tiket_terjual" name="tiket_terjual" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-harga_per_tiket" class="form-label">Harga Per Tiket</label>
                        <input type="number" class="form-control" id="edit-harga_per_tiket" name="harga_per_tiket" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Data Modal -->
<div class="modal fade" id="deleteDataModal" tabindex="-1" aria-labelledby="deleteDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDataModalLabel">Delete Data Penjualan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this data?</p>
                <form id="delete-data-form">
                    <input type="hidden" id="delete-id" name="id">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('#sales-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route("admin.sales") }}',
        columns: [
            { data: 'No', name: 'No' },
            { data: 'Tanggal', name: 'Tanggal' },
            { data: 'Nama_Acara', name: 'Nama_Acara' },
            { data: 'Nama_Customer', name: 'Nama_Customer' },
            { data: 'Tiket_Terjual', name: 'Tiket_Terjual' },
            { data: 'Harga_per_Tiket', name: 'Harga_per_Tiket' },
            { data: 'Total_Penjualan', name: 'Total_Penjualan' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });

    $('#add-data-form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route("admin.sales.store") }}',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#addDataModal').modal('hide');
                table.ajax.reload();
            }
        });
    });

    $('#edit-data-form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route("admin.sales.update") }}',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#editDataModal').modal('hide');
                table.ajax.reload();
            }
        });
    });

    $('#delete-data-form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route("admin.sales.delete") }}',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#deleteDataModal').modal('hide');
                table.ajax.reload();
            }
        });
    });

    $('#sales-table').on('click', '.edit', function () {
        var data = table.row($(this).parents('tr')).data();
        $('#edit-id').val(data.No);
        $('#edit-tanggal').val(data.Tanggal);
        $('#edit-nama_acara').val(data.Nama_Acara);
        $('#edit-nama_customer').val(data.Nama_Customer);
        $('#edit-tiket_terjual').val(data.Tiket_Terjual);
        $('#edit-harga_per_tiket').val(data.Harga_per_Tiket);
        $('#editDataModal').modal('show');
    });

    $('#sales-table').on('click', '.delete', function () {
        var data = table.row($(this).parents('tr')).data();
        $('#delete-id').val(data.No);
        $('#deleteDataModal').modal('show');
    });
});
</script>
@endpush

