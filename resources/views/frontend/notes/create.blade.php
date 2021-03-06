@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.note.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.notes.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="project_id">{{ trans('cruds.note.fields.project') }}</label>
                            <select class="form-control select2" name="project_id" id="project_id" required>
                                @foreach($projects as $id => $entry)
                                    <option value="{{ $id }}" {{ old('project_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('project'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('project') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.note.fields.project_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="note_text">{{ trans('cruds.note.fields.note_text') }}</label>
                            <textarea class="form-control" name="note_text" id="note_text" required>{{ old('note_text') }}</textarea>
                            @if($errors->has('note_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('note_text') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.note.fields.note_text_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection