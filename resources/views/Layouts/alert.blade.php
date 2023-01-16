@if(session('success')) 
    <div class="alert alert-success">
      <i class="icon fas fa-info-circle"></i> {{session('success')}}
    </div>
@endif

@if(session('fail')) 
    <div class="alert alert-danger">
      <i class="icon fas fa-info-circle"></i> {{session('fail')}}
    </div>
@endif

@if(session('warning')) 
    <div class="alert alert-warning">
      <i class="icon fas fa-info-circle"></i> {{session('warning')}}
    </div>
@endif

@if(session('info')) 
    <div class="alert alert-info">
      <i class="icon fas fa-info-circle"></i> {{session('info')}}
    </div>
@endif

