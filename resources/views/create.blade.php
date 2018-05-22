@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar</div>
                <div class="panel-body">
                   


                    @if ($message = Session::get('message'))
                       <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{ $message }}
                       </div>
                    @endif

                        @if ($errors->first('nama') or $errors->first('keterangan'))
                         <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                            @endforeach
                          </ul>
                         </div>
                         @endif 
 
                    <form action="{{route('home.store')}}" method="post">
                      <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="control-label">Nama</label>
                                <input id="nama" type="nama" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                        </div>
                      <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            <label for="keterangan" class="control-label">Keterangan</label>
                                <textarea id="keterangan" type="keterangan" class="form-control" name="keterangan"  required>{{ old('keterangan') }}</textarea>

                                @if ($errors->has('keterangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                        </div>

                      {{ csrf_field() }}
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
