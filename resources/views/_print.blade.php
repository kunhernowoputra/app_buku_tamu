{{ Form::open(['method' => 'POST', 'class' => 'form-vertical', 'route' => 'tamu.print'])}}
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        {{ Form::label('dari', 'Dari Tanggal',['class' => 'control-label']) }}
        {{ Form::date('dari', null, ['class' => 'form-control', 'placeholder' => 'cth: Kun Hernowo Putra']) }}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {{ Form::label('sampai', 'Sampai Tanggal',['class' => 'control-label']) }}
        {{ Form::date('sampai', null, ['class' => 'form-control', 'placeholder' => 'cth: Kun Hernowo Putra']) }}
      </div>
    </div>
    {{ Form::submit('Pencarian',['class' => 'btn btn-primary col-md-3', 'style' => 'margin-top:22px']) }}
  </div>
{{ Form::close() }}
