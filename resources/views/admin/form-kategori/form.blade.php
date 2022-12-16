<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
    <label for="created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="created_at" type="datetime-local" id="created_at" value="{{ isset($formkategori->created_at) ? $formkategori->created_at : ''}}" >
    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expired_date') ? 'has-error' : ''}}">
    <label for="expired_date" class="control-label">{{ 'Expired Date' }}</label>
    <input class="form-control" name="expired_date" type="datetime-local" id="expired_date" value="{{ isset($formkategori->expired_date) ? $formkategori->expired_date : ''}}" >
    {!! $errors->first('expired_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Kategori') ? 'has-error' : ''}}">
    <label for="Kategori" class="control-label">{{ 'Kategori' }}</label>
    <input class="form-control" name="Kategori" type="text" id="Kategori" value="{{ isset($formkategori->Kategori) ? $formkategori->Kategori : ''}}" >
    {!! $errors->first('Kategori', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Deskripsi') ? 'has-error' : ''}}">
    <label for="Deskripsi" class="control-label">{{ 'Deskripsi' }}</label>
    <input class="form-control" name="Deskripsi" type="text" id="Deskripsi" value="{{ isset($formkategori->Deskripsi) ? $formkategori->Deskripsi : ''}}" >
    {!! $errors->first('Deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('File') ? 'has-error' : ''}}">
    <label for="File" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="File" type="text" id="File" value="{{ isset($formkategori->File) ? $formkategori->File : ''}}" >
    {!! $errors->first('File', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Created_by') ? 'has-error' : ''}}">
    <label for="Created_by" class="control-label">{{ 'Created By' }}</label>
    <input class="form-control" name="Created_by" type="text" id="Created_by" value="{{ isset($formkategori->Created_by) ? $formkategori->Created_by : ''}}" >
    {!! $errors->first('Created_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Filter') ? 'has-error' : ''}}">
    <label for="Filter" class="control-label">{{ 'Filter' }}</label>
    <input class="form-control" name="Filter" type="text" id="Filter" value="{{ isset($formkategori->Filter) ? $formkategori->Filter : ''}}" >
    {!! $errors->first('Filter', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
