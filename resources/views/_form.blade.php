{{ Form::open(['method' => 'POST', 'id' => 'buku-tamu'])}}
  <div class="form-group">
    {{ Form::label('nama', 'Nama',['class' => 'control-label']) }}
    {{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'cth: Kun Hernowo Putra']) }}
  </div>
  <div class="form-group">
    {{ Form::label('jenis_kelamin', 'Jenis Kelamin',['class' => 'control-label']) }}
    {{ Form::select('jenis_kelamin',[1 => 'Laki Laki', 2=> 'Perempuan'],null,['class' => 'form-control'])}}
  </div>
  <div class="form-group">
    {{ Form::label('telepon', 'Telepon',['class' => 'control-label']) }}
    {{ Form::text('telepon', null, ['class' => 'form-control', 'placeholder' => 'cth: 08236772271']) }}
  </div>
  <div class="form-group">
    {{ Form::label('alamat', 'Alamat',['class' => 'control-label']) }}
    {{ Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder' => 'cth: Jln Merpati no 1', 'rows' => 3]) }}
  </div>
  <div class="form-group">
    {{ Form::label('keperluan', 'Keperluan',['class' => 'control-label']) }}
    {{ Form::textarea('keperluan', null, ['class' => 'form-control', 'placeholder' => 'cth: Saya mau menemui Bapak Husni', 'rows' => 3]) }}
  </div>
  {{ Form::submit('Simpan',['class' => 'btn btn-primary'])}}
{{ Form::close() }}
