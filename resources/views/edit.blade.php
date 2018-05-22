@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ubah data</div>
                <div class="panel-body">
                   


                    @if ($message = Session::get('message'))
                       <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{ $message }}
                       </div>
                    @endif  
                  
                    <form action="{{route('home.update',$tab->id)}}" method="post">
                      <input type="hidden" name="_method" value="PUT">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" id="nama" name="nama" value="{{ $tab->nama }}">
                      </div>

                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="8" cols="40" >{{ $tab->keterangan }}</textarea>
                        {{ csrf_field() }}
                        
                      </div>

                      
                      <input type="submit" class="btn btn-primary"></input>
                    </form>

                </div>
                
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
  
  window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
      });
  }, 5000);

</script>


@endsection
