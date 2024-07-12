@extends('layouts.master')

@section('content')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Stock</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Stock</a></li>
              <li class="breadcrumb-item active">All Stock</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="student-group-form">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search by ID ...">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search by Stock Id ...">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search by Stock Name ...">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="search-student-btn">
            <button type="btn" class="btn btn-primary">Search</button>
          </div>
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
                  <h3 class="page-title">Stock</h3>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                  <a href="#" class="btn btn-outline-gray me-2 active">
                    <i class="fa fa-list" aria-hidden="true"></i>
                  </a>
                  <a href="{{ route('stocks.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($stocks as $stock)
                  <tr>
                    <td>
                      <div class="form-check check-tables">
                        <input class="form-check-input" type="checkbox" value="something">
                      </div>
                    </td>
                    <td>{{ $stock->id_alternatif }}</td>
                    <td>
                      @if($stock->logo)
                      <img src="{{ asset('storage/' . $stock->logo) }}" alt="{{ $stock->nama_saham }}" width="50">
                      @else
                      No Logo
                      @endif
                    </td>
                    <td>{{ $stock->nama_saham }}</td>
                    <td>{{ $stock->c1 }}</td>
                    <td>{{ $stock->c2 }}</td>
                    <td>{{ $stock->c3 }}</td>
                    <td>{{ $stock->c4 }}</td>
                    <td>{{ $stock->c5 }}</td>
                    <td class="text-end">
                      <div class="actions">
                        <a href="{{ route('stocks.edit', $stock->id_alternatif) }}" class="btn btn-sm bg-warning-light">
                          <i class="far fa-edit me-2"></i>
                        </a>
                        <form action="{{ route('stocks.destroy', $stock->id_alternatif) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this stock?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm bg-danger-light">
                            <i class="far fa-trash-alt me-2"></i>
                          </button>
                        </form>
                      </div>
                    </td>

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