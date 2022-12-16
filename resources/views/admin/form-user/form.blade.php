<div class="form-group {{ $errors->has('Username') ? 'has-error' : ''}}">
    <label for="Username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="Username" type="text" id="Username" value="{{ isset($formuser->Username) ? $formuser->Username : ''}}" >
    {!! $errors->first('Username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Password') ? 'has-error' : ''}}">
    <label for="Password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="Password" type="text" id="Password" value="{{ isset($formuser->Password) ? $formuser->Password : ''}}" >
    {!! $errors->first('Password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Role') ? 'has-error' : ''}}">
    <label for="Role" class="control-label">{{ 'Role' }}</label>
    <input class="form-control" name="Role" type="text" id="Role" value="{{ isset($formuser->Role) ? $formuser->Role : ''}}" >
    {!! $errors->first('Role', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
    <label for="created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="created_at" type="datetime-local" id="created_at" value="{{ isset($formuser->created_at) ? $formuser->created_at : ''}}" >
    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_at') ? 'has-error' : ''}}">
    <label for="updated_at" class="control-label">{{ 'Updated At' }}</label>
    <input class="form-control" name="updated_at" type="datetime-local" id="updated_at" value="{{ isset($formuser->updated_at) ? $formuser->updated_at : ''}}" >
    {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
