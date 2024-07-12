@extends('layouts.master')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">

    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Add Weight</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Weight</a></li>
              <li class="breadcrumb-item active">Add Weight</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card comman-shadow">
          <div class="card-body">
            <form action="{{ route('weights.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-12">
                  <h5 class="form-title student-info">Weight Information
                    <span>
                      <a href="javascript:;"><i class="uil uil-weight"></i></a>
                    </span>
                  </h5>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>ROI <span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('w1') is-invalid @enderror" name="w1" placeholder="Enter ROI" value="{{ old('w1') }}">
                    @error('w1')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Financial Ratio</label>
                    <input class="form-control @error('w2') is-invalid @enderror" type="text" name="w2" placeholder="Enter Rasio Keuangan" value="{{ old('w2') }}">
                    @error('w2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>DPR <span class="login-danger">*</span></label>
                    <input class="form-control @error('w3') is-invalid @enderror" type="text" name="w3" placeholder="Enter DPR" value="{{ old('w3') }}">
                    @error('w3')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Deviden <span class="login-danger">*</span></label>
                    <input class="form-control @error('w4') is-invalid @enderror" type="text" name="w4" placeholder="Enter Deviden" value="{{ old('w4') }}">
                    @error('w4')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Valuation<span class="login-danger">*</span></label>
                    <input class="form-control @error('w5') is-invalid @enderror" type="text" name="w5" placeholder="Enter Valuasi" value="{{ old('w5') }}">
                    @error('w5')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="student-submit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection