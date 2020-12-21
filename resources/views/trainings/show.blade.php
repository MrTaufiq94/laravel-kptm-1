@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Training') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required value="{{ $training->title }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" readonly>{{ $training->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Trainer</label>
                        <input type="text" name="trainer" class="form-control" value="{{ $training->trainer }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
