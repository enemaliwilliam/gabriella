
@if ( session()->has('info'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
		  <strong>{{ session('info') }}</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
	 </div>
@endif

@if ( session()->has('warning'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>{{ session('warning') }}</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
	 </div>
@endif

@if ( session('status'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>{{ session('status') }}</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
	 </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
