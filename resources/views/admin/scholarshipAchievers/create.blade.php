@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.scholarshipAchiever.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.scholarship-achievers.store") }}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label class="required" for="student_name">{{ trans('cruds.scholarshipAchiever.fields.student_name') }}</label>
                <select class="form-control select2" name="student_name" id="student_name">
                    @foreach(App\StudentProfile::all() as $student_name)
                        <option value="{{$student_name->fullname}}">{{$student_name->fullname}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="form-group">
                <label for="collegename">{{ trans('cruds.scholarshipAchiever.fields.collegename') }}</label>
                <input class="form-control {{ $errors->has('collegename') ? 'is-invalid' : '' }}" type="text" name="collegename" id="collegename" value="{{ old('collegename', '') }}">
                @if($errors->has('collegename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('collegename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipAchiever.fields.collegename_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="course">{{ trans('cruds.scholarshipAchiever.fields.course') }}</label>
                <input class="form-control {{ $errors->has('course') ? 'is-invalid' : '' }}" type="text" name="course" id="course" value="{{ old('course', '') }}">
                @if($errors->has('course'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipAchiever.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="students_city">{{ trans('cruds.scholarshipAchiever.fields.students_city') }}</label>
                <input class="form-control {{ $errors->has('students_city') ? 'is-invalid' : '' }}" type="text" name="students_city" id="students_city" value="{{ old('students_city', '') }}">
                @if($errors->has('students_city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('students_city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipAchiever.fields.students_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="schemename">{{ trans('cruds.scholarshipAchiever.fields.schemename') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('schemename') ? 'is-invalid' : '' }}" name="schemename" id="schemename">{!! old('schemename') !!}</textarea>
                @if($errors->has('schemename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('schemename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipAchiever.fields.schemename_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scholarshipamount">{{ trans('cruds.scholarshipAchiever.fields.scholarshipamount') }}</label>
                <input class="form-control {{ $errors->has('scholarshipamount') ? 'is-invalid' : '' }}" type="number" name="scholarshipamount" id="scholarshipamount" value="{{ old('scholarshipamount', '') }}" step="1">
                @if($errors->has('scholarshipamount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scholarshipamount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipAchiever.fields.scholarshipamount_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/scholarship-achievers/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', {{ $scholarshipAchiever->id ?? 0 }});
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection