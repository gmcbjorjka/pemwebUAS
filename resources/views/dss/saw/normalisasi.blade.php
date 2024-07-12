@extends('layouts.master')

@section('content')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="card card-table comman-shadow">
          <div class="card-body">
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title">Normalization Criteria Simple Additive Weighting</h3>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                  <div class="col-lg-2">
                    <div class="search-student-btn">
                      <a href="{{ route('saw.hasil') }}" class="btn btn-primary">Next</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped" id="StockList">
                <thead class="student-thread">
                  <tr>
                    <th>Logo</th>
                    <th>Stock Name</th>
                    <th>Normalization 1</th>
                    <th>Normalization 2</th>
                    <th>Normalization 3</th>
                    <th>Normalization 4</th>
                    <th>Normalization 5</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($stocks as $stock)
                  <tr>
                    <td><img src="{{ asset('storage/' . $stock->logo) }}" alt="Logo" width="50"></td>
                    <td>{{ $stock->nama_saham }}</td>
                    <td>{{ $stock->r1 }}</td>
                    <td>{{ $stock->r2 }}</td>
                    <td>{{ $stock->r3 }}</td>
                    <td>{{ $stock->r4 }}</td>
                    <td>{{ $stock->r5 }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection