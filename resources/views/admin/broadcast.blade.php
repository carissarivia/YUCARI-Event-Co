@extends('admin.layouts.main')

@section('title', 'Broadcast')
@section('page', 'Broadcast')

@section('content')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>Broadcast Email</h6>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('admin.broadcast.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Send Broadcast</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#message'), {
            ckfinder: {
                uploadUrl: '{{ route('admin.broadcast.upload') . '?_token=' . csrf_token() }}'
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
