@if(session()->has('message'))
  <div class="alert alert-primary container d-flex align-items-center justify-content-center" role="alert">
    {{session('message')}}
  </div>           
@endif