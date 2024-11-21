@extends('notes.layout')

@section('content')

<div class="mt-5 card">
    <h2 class="card-header">Show Note</h2>
    <div class="card-body">

        <div class="gap-2 d-grid d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('notes') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong> <br/>
                    {{ $note->title }}
                </div>
            </div>
            <div class="mt-2 col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>contents:</strong> <br/>
                    {{ $note->content }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection