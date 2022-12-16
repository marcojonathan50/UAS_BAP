<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
    <label for="created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="created_at" type="datetime-local" id="created_at" value="{{ isset($formbank->created_at) ? $formbank->created_at : ''}}" >
    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_at') ? 'has-error' : ''}}">
    <label for="updated_at" class="control-label">{{ 'Updated At' }}</label>
    <input class="form-control" name="updated_at" type="datetime-local" id="updated_at" value="{{ isset($formbank->updated_at) ? $formbank->updated_at : ''}}" >
    {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Norek') ? 'has-error' : ''}}">
    <label for="Norek" class="control-label">{{ 'Norek' }}</label>
    <input class="form-control" name="Norek" type="text" id="Norek" value="{{ isset($formbank->Norek) ? $formbank->Norek : ''}}" >
    {!! $errors->first('Norek', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    <label for="Nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="Nama" type="text" id="Nama" value="{{ isset($formbank->Nama) ? $formbank->Nama : ''}}" >
    {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('File') ? 'has-error' : ''}}">
    <label for="File" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="File" type="text" id="File" value="{{ isset($formbank->File) ? $formbank->File : ''}}" >
    {!! $errors->first('File', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Created_by') ? 'has-error' : ''}}">
    <label for="Created_by" class="control-label">{{ 'Created By' }}</label>
    <input class="form-control" name="Created_by" type="text" id="Created_by" value="{{ isset($formbank->Created_by) ? $formbank->Created_by : ''}}" >
    {!! $errors->first('Created_by', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
