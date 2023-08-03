@extends('layouts.scholarshipprovider')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.setupscholarship.title_singular') }}
    </div>

    <div class="card-body">
        
        <form method="POST" action="{{route('storescholarship')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <div class="form-group">
                <label class="required" for="scheme_name">{{ trans('cruds.setupscholarship.fields.scheme_name') }}</label>
                <input class="form-control {{ $errors->has('scheme_name') ? 'is-invalid' : '' }}" type="text" name="scheme_name" id="scheme_name" value="{{ old('scheme_name', '') }}" required>
                @if($errors->has('scheme_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scheme_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.scheme_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_name_id">{{ trans('cruds.setupscholarship.fields.company_name') }}</label>
                <select class="form-control select2 {{ $errors->has('company_name') ? 'is-invalid' : '' }}" name="company_name_id" id="company_name_id">
                    @foreach($company_names as $id => $company_name)
                        <option value="{{ $id }}" {{ old('company_name_id') == $id ? 'selected' : '' }}>{{ $company_name }}</option>
                    @endforeach
                </select>
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category_id">{{ trans('cruds.setupscholarship.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="courses">{{ trans('cruds.setupscholarship.fields.course') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('courses') ? 'is-invalid' : '' }}" name="courses[]" id="courses" multiple>
                    @foreach($courses as $id => $course)
                        <option value="{{ $id }}" {{ in_array($id, old('courses', [])) ? 'selected' : '' }}>{{ $course }}</option>
                    @endforeach
                </select>
                @if($errors->has('courses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('courses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label>Gender Criteria</label>
                <select class="form-control select2" name="gender_criteria" required>
                    <option value="female">Only Female</option>
                    <option value="male">Only Males</option>
                    <option value="trans">Only TransGender</option>
                    <option value="both">Both</option>
                </select>
            </div>
            <div class="form-group">
                <label for="documents">List of eligible Documents</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('documents') ? 'is-invalid' : '' }}" name="documents[]" id="documents" multiple>
                    @foreach($documents as $id => $document)
                        <option value="{{ $id }}" {{ in_array($id, old('documents', [])) ? 'selected' : '' }}>{{ $document }}</option>
                    @endforeach
                </select>
                @if($errors->has('documents'))
                    <div class="invalid-feedback">
                        {{ $errors->first('documents') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.course_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scheme_description">{{ trans('cruds.setupscholarship.fields.scheme_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('scheme_description') ? 'is-invalid' : '' }}" name="scheme_description" id="scheme_description">{!! old('scheme_description') !!}</textarea>
                @if($errors->has('scheme_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scheme_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.scheme_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="eligibility_criteria">{{ trans('cruds.setupscholarship.fields.eligibility_criteria') }}</label>
                <textarea class="form-control ckeditor{{ $errors->has('eligibility_criteria') ? 'is-invalid' : '' }}" name="eligibility_criteria" id="eligibility_criteria">{{ old('eligibility_criteria') }}</textarea>
                @if($errors->has('eligibility_criteria'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eligibility_criteria') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.eligibility_criteria_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="benefits">{{ trans('cruds.setupscholarship.fields.benefits') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('benefits') ? 'is-invalid' : '' }}" name="benefits" id="benefits">{!! old('benefits') !!}</textarea>
                @if($errors->has('benefits'))
                    <div class="invalid-feedback">
                        {{ $errors->first('benefits') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.benefits_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="how_to_apply">{{ trans('cruds.setupscholarship.fields.how_to_apply') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('how_to_apply') ? 'is-invalid' : '' }}" name="how_to_apply" id="how_to_apply">{!! old('how_to_apply') !!}</textarea>
                @if($errors->has('how_to_apply'))
                    <div class="invalid-feedback">
                        {{ $errors->first('how_to_apply') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.how_to_apply_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_date">{{ trans('cruds.setupscholarship.fields.last_date') }}</label>
                <input class="form-control date {{ $errors->has('last_date') ? 'is-invalid' : '' }}" type="text" name="last_date" id="last_date" value="{{ old('last_date') }}">
                @if($errors->has('last_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.last_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="docs_required">{{ trans('cruds.setupscholarship.fields.docs_required') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('docs_required') ? 'is-invalid' : '' }}" name="docs_required" id="docs_required">{!! old('docs_required') !!}</textarea>
                @if($errors->has('docs_required'))
                    <div class="invalid-feedback">
                        {{ $errors->first('docs_required') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.docs_required_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="">Total Number of Student</label>
                <input class="form-control {{ $errors->has('student_count') ? 'is-invalid' : '' }}" type="text" name="student_count" id="student_count" value="{{ old('student_count', '') }}">
                @if($errors->has('student_count'))
                    <div class="invalid-feedback">
                        {{ $errors->first('student_count') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarship.fields.scholarship_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scholarship_amount">{{ trans('cruds.setupscholarship.fields.scholarship_amount') }}</label>
                <input class="form-control {{ $errors->has('scholarship_amount') ? 'is-invalid' : '' }}" type="text" name="scholarship_amount" id="scholarship_amount" value="{{ old('scholarship_amount', '') }}">
                @if($errors->has('scholarship_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scholarship_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.scholarship_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="scholarship_amount">Total Scholarship Corpus Available</label>
                <input class="form-control {{ $errors->has('scholarship_corpus') ? 'is-invalid' : '' }}" type="text" name="scholarship_corpus" id="scholarship_corpus" value="{{ old('scholarship_corpus', '') }}">
                @if($errors->has('scholarship_corpus'))
                    <div class="invalid-feedback">
                        {{ $errors->first('scholarship_corpus') }}
                    </div>
                @endif
               
            </div>
            <div class="form-group">
                <label for="terms_conditions">{{ trans('cruds.setupscholarship.fields.terms_conditions') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('terms_conditions') ? 'is-invalid' : '' }}" name="terms_conditions" id="terms_conditions">{!! old('terms_conditions') !!}</textarea>
                @if($errors->has('terms_conditions'))
                    <div class="invalid-feedback">
                        {{ $errors->first('terms_conditions') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.terms_conditions_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_address">{{ trans('cruds.setupscholarship.fields.contact_address') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('contact_address') ? 'is-invalid' : '' }}" name="contact_address" id="contact_address">{!! old('contact_address') !!}</textarea>
                @if($errors->has('contact_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.contact_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_email">{{ trans('cruds.setupscholarship.fields.contact_email') }}</label>
                <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="email" name="contact_email" id="contact_email" value="{{ old('contact_email') }}">
                @if($errors->has('contact_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.contact_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_phone_number">{{ trans('cruds.setupscholarship.fields.contact_phone_number') }}</label>
                <input class="form-control {{ $errors->has('contact_phone_number') ? 'is-invalid' : '' }}" type="text" name="contact_phone_number" id="contact_phone_number" value="{{ old('contact_phone_number', '') }}">
                @if($errors->has('contact_phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.contact_phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.setupscholarship.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Setupscholarship::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.setupscholarship.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label>Video Link of Application</label>
                <input type="text" name="video_link" placeholder="Enter Scholarship Application Video Link" class="form-control">
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
                xhr.open('POST', '/admin/setupscholarships/ckmedia', true);
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
                data.append('crud_id', {{ $setupscholarship->id ?? 0 }});
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
<script type="text/javascript">
    
    $("#scholarship_amount").on("keyup",scholarship_corpus);
    function scholarship_corpus()
    {
      var student_count=document.getElementById('student_count').value;
      var scholarship_amount= document.getElementById('scholarship_amount').value;
      var result=(parseInt(student_count) * parseInt(scholarship_amount));
       
                if (!isNaN(result)) {
                    document.getElementById('scholarship_corpus').value = result;
                }
                                      
    }
</script>
@endsection