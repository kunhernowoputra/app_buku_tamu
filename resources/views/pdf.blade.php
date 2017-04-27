<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Print</title>
    <style>

      table {
        font: 11px/24px Verdana, Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      th {
        padding: 0 0.5em;
        text-align: left;
      }
      tr.yellow td {
        border-top: 1px solid #FB7A31;
        border-bottom: 1px solid #FB7A31;
        background: #FFC;
      }
      td {
        border-bottom: 1px solid #CCC;
        padding: 0 0.5em;
      }
      td:first-child {
        width: 20%;
      }
      td+td {
        border-left: 1px solid #CCC;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h4>Data Buku Tamu <small><i>{{ $dari }} - {{ $sampai }}</i></small></h4>

    <table>
      <tr class="yellow">
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Telepon</td>
        <td>Alamat</td>
        <td>Keperluan</td>
        <td>Waktu</td>
      </tr>
      @foreach($data as $data)
      <tr>
        <td>{{ $data->nama}}</td>
        <td>{{ $data->jenis_kelamin}}</td>
        <td>{{ $data->telepon}}</td>
        <td>{{ $data->alamat}}</td>
        <td>{{ $data->keperluan}}</td>
        <td>{{ $data->created_at}}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
