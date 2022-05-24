@extends('layouts.main')
@section('content')
<!-- Default box -->
@foreach($posts as $problem)
<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $problem['title'] }}</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button> --}}
      </div>
    </div>
<div class="card-body">
<article>
    <table>
        <tr>
            <td style="padding: 10px">{!! $problem['video1'] !!}</td>
            {{-- <td></td> --}}
            <td style="padding: 10px">By : <strong>{{ $problem['penulis'] }}</strong><br>{!! $problem['deskripsi'] !!}</td>
        </tr>
    </table>
</article>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <a href="/problems/{{ $problem['slug'] }}">Read More...</a> 
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endforeach

@endsection