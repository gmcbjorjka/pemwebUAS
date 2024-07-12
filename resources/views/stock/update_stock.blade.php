@extends('layouts.master')
@section('content')
<div class="page-wrapper">
  <div class="content container-fluid">

    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Update Stock</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Stock</a></li>
              <li class="breadcrumb-item active">Update Stock</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    {{-- message --}}
    <div class="row">
      <div class="col-sm-12">
        <div class="card comman-shadow">
          <div class="card-body">
            <form action="{{ route('stocks.update', $stock->id_alternatif) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-12">
                  <h5 class="form-title student-info">Stock Information
                    <span>
                      <a href="javascript:;"><i class="fas fa-money-bill-trend-up"></i></a>
                    </span>
                  </h5>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>ID Stock <span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('id_stock') is-invalid @enderror" name="id_stock" placeholder="Enter ID Stock" value="{{ old('id_stock', $stock->id_alternatif) }}">
                    @error('id_stock')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Name Stock <span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('name_stock') is-invalid @enderror" name="name_stock" placeholder="Enter Name Stock" value="{{ old('name_stock', $stock->nama_saham) }}">
                    @error('name_stock')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>ROI <span class="login-danger">*</span></label>
                    <input type="text" class="form-control @error('roi') is-invalid @enderror" name="roi" placeholder="Enter ROI" value="{{ old('roi', $stock->c1) }}">
                    @error('roi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Financial Ratio<span class="login-danger">*</span></label>
                    <input class="form-control @error('rasio_keuangan') is-invalid @enderror" type="text" name="rasio_keuangan" placeholder="Enter Rasio Keuangan" value="{{ old('rasio_keuangan', $stock->c2) }}">
                    @error('rasio_keuangan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>DPR <span class="login-danger">*</span></label>
                    <input class="form-control @error('dpr') is-invalid @enderror" type="text" name="dpr" placeholder="Enter DPR" value="{{ old('dpr', $stock->c3) }}">
                    @error('dpr')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Deviden <span class="login-danger">*</span></label>
                    <input class="form-control @error('deviden') is-invalid @enderror" type="text" name="deviden" placeholder="Enter Deviden" value="{{ old('deviden', $stock->c4) }}">
                    @error('deviden')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Valuation <span class="login-danger">*</span></label>
                    <input class="form-control @error('valuasi') is-invalid @enderror" type="text" name="valuasi" placeholder="Enter Valuasi" value="{{ old('valuasi', $stock->c5) }}">
                    @error('valuasi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                    <label>Logo <span class="login-danger">*</span></label>
                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                    @if ($stock->logo)
                    <img src="{{ asset('storage/' . $stock->logo) }}" alt="Logo" width="100">
                    @endif
                    @error('logo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12">
                  <div class="student-submit">
                    <button type="submit" class="btn btn-primary">Update</button>
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