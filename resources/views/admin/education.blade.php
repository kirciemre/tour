@extends('layouts.admin')

@section('title')
Educational Information
@endsection

@section('css')
@endsection

@section('content')
      <div class="page-header">
        <h3 class="page-title"> Educational Informations </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">List of Educations</h4>
              <a href="{{route('admin.education-add')}}" class="btn btn-success"> + Add Education</a>
              </p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Years</th>
                      <th>University</th>
                      <th>Branch</th>
                      <th>Description</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($list as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->education_date}}</td>
                      <td>{{$item->university}}</td>
                      <td>{{$item->branch}}</td></td>
                      <td>{{$item->description}}</td></td>
                      <td>
                        @if ($item->status==1)
                        <label class="badge badge-success">Active</label>
                        @else
                        <label class="badge badge-danger">Passive</label>
                        @endif
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

@endsection

@section('js')
@endsection