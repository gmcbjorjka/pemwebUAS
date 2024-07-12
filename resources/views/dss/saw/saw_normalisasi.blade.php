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
                  <h3 class="page-title">Normalization Weight</h3>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                  <div class="col-lg-2">
                    <div class="search-student-btn">
                      <a href="{{ route('saw.preferens') }}" class="btn btn-primary">Next</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped" id="StockList">
                <thead class="student-thread">
                  <tr>
                    <th>Id User</th>
                    <th>Weight 1</th>
                    <th>Weight 2</th>
                    <th>Weight 3</th>
                    <th>Weight 4</th>
                    <th>Weight 5</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($weights as $weight)
                  <tr>
                    <td>{{ $weight->user_id }}</td>
                    <td>{{ $weight->b1 }}</td>
                    <td>{{ $weight->b2 }}</td>
                    <td>{{ $weight->b3 }}</td>
                    <td>{{ $weight->b4 }}</td>
                    <td>{{ $weight->b5 }}</td>
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