@extends('layouts.main')
@section('content')
    <h1>{{ $post['title'] }}</h1>
    <div class="col-lg-8 col-md-8 col-12 float-left">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">PDF</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button> --}}
                </div>
            </div>
            <div class="card-body" style="height:350px;">
                {{-- <article>
  <table>
      <tr> --}}
                {{-- <td> --}}
                {!! $post['pdf'] !!}
                {{-- </td> --}}
                {{-- <td style="padding: 3%"> --}}

                {{-- audio --}}
                {{-- </td>
      </tr>
  </table>
</article> --}}
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="col-lg-4 float-right">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Rekaman Suara</h3>
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
                            <p>Rekaman Suara 1</p>
                            <audio controls class="col-md-6">
                                <source src="/sound/{{ $post['sound1'] }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>

                        </tr>
                        <tr>
                            <p>Rekaman Suara 2</p>
                            <audio controls class="col-md-6">
                                <source src="/sound/{{ $post['sound2'] }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </tr>
                        <tr>
                            <p>Rekaman Suara 3</p>
                            <audio controls class="col-md-6">
                                <source src="/sound/{{ $post['sound3'] }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </tr>
                    </table>
                </article>
            </div>
            <!-- /.card -->
        </div>
    </div>







    <div class="card float-left">
        <div class="card-header">
            <h3 class="card-title">Body</h3>
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
                        <td style="padding: 10px">By : <strong>{{ $post['penulis'] }}</strong><br>
                          {!! $post['body'] !!}  
                        </td>
                    </tr>
                </table>
            </article>
        </div>
    </div>

    <div class="card col-lg-12 float-left">
        <div class="card-header">
            <h3 class="card-title">Video</h3>
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
                        <td>
                            {!! $post['video1'] !!}
                        </td>
                        <td>
                            {!! $post['video2'] !!}
                        </td>
                        <td>
                            {!! $post['video3'] !!}
                        </td>
                    </tr>
                </table>
            </article>
        </div>
        <!-- /.card -->
        <div class="card-footer">
            <a href="/">Back to Beranda</a>
        </div>
        <!-- /.card-footer-->
    </div>


    <!-- /.card-body -->
@endsection
