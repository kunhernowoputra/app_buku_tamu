@extends('layouts.app')
@section('content')
  <div class="banner">
    Buku Tamu
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1 class="panel-title">
        @component('components.modal')
          @slot('target')
            tambah
          @endslot
          @slot('buttonIcon')
            <i class="glyphicon glyphicon-plus"> </i>
          @endslot
          @slot('buttonName')
            Tambah
          @endslot
          @slot('modalTitleIcon')
            <i class="glyphicon glyphicon-list-alt"> </i>
          @endslot
          @slot('modalTitle')
            Formulir Tamu
          @endslot
          @slot('modalBody')
            @include('_form')
          @endslot
        @endcomponent

        @component('components.modal')
          @slot('target')
            print
          @endslot
          @slot('buttonIcon')
            <i class="glyphicon glyphicon-print"> </i>
          @endslot
          @slot('buttonName')
            Print
          @endslot
          @slot('modalTitleIcon')
            <i class="glyphicon glyphicon-folder-close"></i>
          @endslot
          @slot('modalTitle')
            Print Buku Tamu
          @endslot
          @slot('modalBody')
            @include('_print')
          @endslot
        @endcomponent
      </h1>
    </div>
    <div class="panel-body">
      <table id="table-tamu" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Name</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Keperluan</th>
            <th>Waktu</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
  $(function () {
    $("#buku-tamu").validate({
      rules: {
        nama: "required",
        telepon: 'required',
        alamat: 'required',
        keperluan: 'required',
      },
      submitHandler: function() {
        var form = $('#buku-tamu');
        $.ajax({
          type   : 'POST',
          url    : '{{ route('tamu.post') }}',
          data   : form.serialize(),
          dataType: 'json',
          success: function(data, statusText, xhr)
          {
            if (xhr.status == 200) {
              location.reload();
            }
          },
        });
      }
    });

    $('#table-tamu').DataTable({
        ordering: false,
        processing: true,
        serverSide: true,
        ajax: '{{ route('tamu.show') }}',
        columns: [
          {
            data: 'nama',
            name: 'nama'
          }, {
            data: 'jenis_kelamin',
            name: 'jenis_kelamin'
          }, {
            data: 'telepon',
            name: 'telepon'
          }, {
            data: 'alamat',
            name: 'alamat'
          }, {
            data: 'keperluan',
            name: 'keperluan'
          }, {
            data: 'created_at',
            name: 'created_at'
          }
        ]
    });

  });
</script>
@endpush
