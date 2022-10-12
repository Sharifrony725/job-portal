@if ($errors->any())
    @foreach ($errors->all() as $error)
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong>{{ $error }}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none;">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    @endforeach
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong>{{ session('error') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none;">
           <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Success! </strong>{{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none;">
           <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endif
