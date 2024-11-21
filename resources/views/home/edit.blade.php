@extends('notes.layout')

@section('content')

<div class="mt-5 card">
    <h2 class="card-header">Edit Note</h2>
    <div class="card-body">

        <div class="gap-2 d-grid d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ url('notes') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ url('notes',$note->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input
                    type="text"
                    name="title"
                    value="{{ $note->title }}"
                    class="form-control @error('title') is-invalid @enderror"
                    id="inputName"
                    placeholder="Name">
                @error('title')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputcontent" class="form-label"><strong>content:</strong></label>
                <textarea
                    class="form-control @error('content') is-invalid @enderror"
                    style="height:150px"
                    name="content"
                    id="inputcontent"
                    placeholder="content">{{ $note->content }}</textarea>
                @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>
@endsection