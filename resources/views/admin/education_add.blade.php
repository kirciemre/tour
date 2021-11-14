@extends('layouts.admin')

@section('title')
Add Educational Information
@endsection

@section('css')

@endsection

@section('content')
      <div class="page-header">
        <h3 class="page-title"> Add Education </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          </ol>
        </nav>
      </div>
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Educational Information Form</h4>
            <p class="card-description"> Please add your educational informations... </p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="forms-sample" action="" method="POST" id="edu_data">
                @csrf
              <div class="form-group">
                <label for="date">Dates</label>
                <input type="text" name="date" class="form-control" id="date" placeholder="Exp: 2012-2021">
              </div>
              <div class="form-group">
                <label for="uni">University Name</label>
                <input type="text" name="uni" class="form-control" id="uni" placeholder="Exp: Stanford University">
              </div>
              <div class="form-group">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" name="branch" id="branch" placeholder="Exp: Chemical Engineering">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                  <option selected value="1">Active</option>
                  <option value="0">Passive</option>
                </select>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
              </div>
              <button type="button" id='postButton' class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark" type="button" id="cancelButton" name="cancel">Cancel</button>
            </form>
          </div>
        </div>
      </div>

@endsection

@section('js')

<script>
    let cancelButton = $('#cancelButton');
    cancelButton.click( function(){
        window.location.href = "{{route('admin.education')}}";
    })
    let postButton = $("#postButton");

    postButton.click( function(){
        if($('#date').val().trim()=="" || $('#uni').val().trim()=="" || $('#branch').val().trim()==""){
            toastr.error("You must fill date, university name and branch!", "Error!",'positionclass = "toast-bottom-right"');
        }else{
            $('#edu_data').submit();
        }
    })
</script>

@endsection