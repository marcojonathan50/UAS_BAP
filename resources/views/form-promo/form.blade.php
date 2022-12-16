<div class="form-group {{ $errors->has('nama_promo') ? 'has-error' : ''}}">
    <label for="nama_promo" class="control-label">{{ 'Nama Promo' }}</label>
    <input class="form-control" name="nama_promo" type="text" id="nama_promo" value="{{ isset($formpromo->nama_promo) ? $formpromo->nama_promo : ''}}" >
    {!! $errors->first('nama_promo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('deskripsi_promo') ? 'has-error' : ''}}">
    <label for="deskripsi_promo" class="control-label">{{ 'Deskripsi Promo' }}</label>
    <input class="form-control" name="deskripsi_promo" type="text" id="deskripsi_promo" value="{{ isset($formpromo->deskripsi_promo) ? $formpromo->deskripsi_promo : ''}}" >
    {!! $errors->first('deskripsi_promo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('diskon') ? 'has-error' : ''}}">
    <label for="diskon" class="control-label">{{ 'Diskon' }}</label>
    <input class="form-control" name="diskon" type="text" id="diskon" value="{{ isset($formpromo->diskon) ? $formpromo->diskon : ''}}" >
    {!! $errors->first('diskon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tombol') ? 'has-error' : ''}}">
    <label for="tombol" class="control-label">{{ 'Tombol' }}</label>
    <input class="form-control" name="tombol" type="text" id="tombol" value="{{ isset($formpromo->tombol) ? $formpromo->tombol : ''}}" >
    {!! $errors->first('tombol', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="text" id="foto" value="{{ isset($formpromo->foto) ? $formpromo->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
