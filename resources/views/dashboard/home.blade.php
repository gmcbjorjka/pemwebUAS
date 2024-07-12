@extends('layouts.master')

@section('content')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Welcome {{ auth()->user()->name }}!</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ auth()->user()->name }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card w-100 bg-gradient">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Price IBM</h6>
                <h3>$ 176,32</h3>
              </div>
              <div class="db-icon">
                <img src="{{ URL::to('assets/img/icons/IBM.svg') }}" alt="Dashboard Icon">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-gradient w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Price AAPL</h6>
                <h3>$ 230,75</h3>
              </div>
              <div class="db-icon">
                <img src="{{ URL::to('assets/img/icons/apple.svg') }}" alt="Dashboard Icon">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-gradient w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Price MSFT</h6>
                <h3>$ 460,81</h3>
              </div>
              <div class="db-icon">
                <img src="{{ URL::to('assets/img/icons/msft.svg') }}" alt="Dashboard Icon">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-gradient w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Price GOOGL</h6>
                <h3>191,56</h3>
              </div>
              <div class="db-icon">
                <img src="{{ URL::to('assets/img/icons/GOOGL.svg') }}" alt="Dashboard Icon">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped" id="StockList">
          <thead class="student-thread">
            <tr>
              <th>
                <div class="form-check check-tables">
                  <input class="form-check-input" type="checkbox" value="something">
                </div>
              </th>
              <th>ID</th>
              <th>Logo</th>
              <th>Stock Name</th>
              <th>ROI</th>
              <th>Financial Ratio</th>
              <th>DPR</th>
              <th>Dividen</th>
              <th>Valuation</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($stocks as $stock)
            <tr>
              <td>
                <div class="form-check check-tables">
                  <input class="form-check-input" type="checkbox" value="{{ $stock->id_alternatif }}">
                </div>
              </td>
              <td>{{ $stock->id_alternatif }}</td>
              <td><img src="{{ asset('storage/' . $stock->logo) }}" alt="Logo" width="50"></td>
              <td>{{ $stock->nama_saham }}</td>
              <td>{{ $stock->c1 }}</td>
              <td>{{ $stock->c2 }}</td>
              <td>{{ $stock->c3 }}</td>
              <td>{{ $stock->c4 }}</td>
              <td>{{ $stock->c5 }}</td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection