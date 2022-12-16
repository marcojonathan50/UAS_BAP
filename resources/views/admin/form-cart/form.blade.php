<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
    <label for="created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="created_at" type="datetime-local" id="created_at" value="{{ isset($formcart->created_at) ? $formcart->created_at : ''}}" >
    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_at') ? 'has-error' : ''}}">
    <label for="updated_at" class="control-label">{{ 'Updated At' }}</label>
    <input class="form-control" name="updated_at" type="datetime-local" id="updated_at" value="{{ isset($formcart->updated_at) ? $formcart->updated_at : ''}}" >
    {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Userid') ? 'has-error' : ''}}">
    <label for="Userid" class="control-label">{{ 'Userid' }}</label>
    <input class="form-control" name="Userid" type="text" id="Userid" value="{{ isset($formcart->Userid) ? $formcart->Userid : ''}}" >
    {!! $errors->first('Userid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Product_id') ? 'has-error' : ''}}">
    <label for="Product_id" class="control-label">{{ 'Product Id' }}</label>
    <input class="form-control" name="Product_id" type="text" id="Product_id" value="{{ isset($formcart->Product_id) ? $formcart->Product_id : ''}}" >
    {!! $errors->first('Product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Qty') ? 'has-error' : ''}}">
    <label for="Qty" class="control-label">{{ 'Qty' }}</label>
    <input class="form-control" name="Qty" type="text" id="Qty" value="{{ isset($formcart->Qty) ? $formcart->Qty : ''}}" >
    {!! $errors->first('Qty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Desc') ? 'has-error' : ''}}">
    <label for="Desc" class="control-label">{{ 'Desc' }}</label>
    <input class="form-control" name="Desc" type="text" id="Desc" value="{{ isset($formcart->Desc) ? $formcart->Desc : ''}}" >
    {!! $errors->first('Desc', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
