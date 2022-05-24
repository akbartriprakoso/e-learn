@extends('layouts.main')
@section('content')
<!-- Main content -->
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputJudul">Judul</label>
                  <input type="text" class="form-control" id="inputJudul" placeholder="masukkan judul">
                </div>
                <div class="form-group">
                  <label for="inputPDF">File input PDF</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputPDF">
                      <label class="custom-file-label" for="inputPDF">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputVideo">File input Video</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputVideo">
                        <label class="custom-file-label" for="inputVideo">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputVn">File input Vn</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputVn">
                        <label class="custom-file-label" for="inputVn">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

          {{-- <textarea id="basic-conf" class="col-lg-12 float-left">
            Tulis disini...
            </textarea> --}}

            <div class="card border-0 shadow rounded">
              <div class="card-body">

                  {{-- <form action="{{ route('post.store') }}" method="POST"> --}}
                  <form action="" method="POST">
                      @csrf

                      <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror"
                              name="title" value="{{ old('title') }}" required>

                          <!-- error message untuk title -->
                          @error('title')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label for="status">Publish Status</label>
                          <select name="status" class="form-control" required>
                              <option value="1" selected>Publish</option>
                              <option value="0">Draft</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="inputPDF">File input PDF</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputPDF">
                            <label class="custom-file-label" for="inputPDF">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputVideo">File input Video</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputVideo">
                            <label class="custom-file-label" for="inputVideo">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputVn">File input Vn</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputVn">
                            <label class="custom-file-label" for="inputVn">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="content">Content</label>
                          <textarea
                              name="content" id="content"
                              class="form-control @error('content') is-invalid @enderror"
                              rows="5"
                              required>{{ old('content') }}</textarea>

                          <!-- error message untuk content -->
                          @error('content')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>

                      <button type="submit" class="btn btn-md btn-primary">Save</button>
                      {{-- <a href="{{ route('post.index') }}" class="btn btn-md btn-secondary">back</a> --}}
                      <a href="" class="btn btn-md btn-secondary">back</a>

                  </form>
              </div>
          </div>

        
@endsection