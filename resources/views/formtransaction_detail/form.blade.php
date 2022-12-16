<div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
    <label for="created_at" class="control-label">{{ 'Created At' }}</label>
    <input class="form-control" name="created_at" type="datetime-local" id="created_at" value="{{ isset($formtransaction_detail->created_at) ? $formtransaction_detail->created_at : ''}}" >
    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('updated_at') ? 'has-error' : ''}}">
    <label for="updated_at" class="control-label">{{ 'Updated At' }}</label>
    <input class="form-control" name="updated_at" type="datetime-local" id="updated_at" value="{{ isset($formtransaction_detail->updated_at) ? $formtransaction_detail->updated_at : ''}}" >
    {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Productid') ? 'has-error' : ''}}">
    <label for="Productid" class="control-label">{{ 'Productid' }}</label>
    <input class="form-control" name="Productid" type="number" id="Productid" value="{{ isset($formtransaction_detail->Productid) ? $formtransaction_detail->Productid : ''}}" >
    {!! $errors->first('Productid', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Transactionnumber') ? 'has-error' : ''}}">
    <label for="Transactionnumber" class="control-label">{{ 'Transactionnumber' }}</label>
    <input class="form-control" name="Transactionnumber" type="text" id="Transactionnumber" value="{{ isset($formtransaction_detail->Transactionnumber) ? $formtransaction_detail->Transactionnumber : ''}}" >
    {!! $errors->first('Transactionnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Qty') ? 'has-error' : ''}}">
    <label for="Qty" class="control-label">{{ 'Qty' }}</label>
    <input class="form-control" name="Qty" type="number" id="Qty" value="{{ isset($formtransaction_detail->Qty) ? $formtransaction_detail->Qty : ''}}" >
    {!! $errors->first('Qty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Price') ? 'has-error' : ''}}">
    <label for="Price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="Price" type="number" id="Price" value="{{ isset($formtransaction_detail->Price) ? $formtransaction_detail->Price : ''}}" >
    {!! $errors->first('Price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
