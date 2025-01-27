@extends("layouts.draft")
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@section('content_1')
    <div class="col-md-12 each_section">
        <div class="row p-2">
                @include("layouts.sections.admin.admin")
        </div>
    </div>
@endsection