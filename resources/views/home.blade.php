@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah data baru</div>
                <div class="panel-body">

                     @if ($message = Session::get('message'))
                       <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ $message }}
                      </div>
                     @endif 

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">keterangan</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        @foreach ($isi as $key => $isine)
                            <tr>
                                 {{-- expr --}}
                              <th scope="row">{{$key+1}} </th>
                              <td>{{$isine->nama}}</td>
                              <td>{{$isine->keterangan}}</td>
                              <td>
                            <div class="col-md-3">
                                <form action="{{route('home.destroy',$isine->id)}}" method="post">
                                  <input type="hidden" name="_method" value="DELETE">
                                  {{ csrf_field() }}
                                  <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>

                            <div class="col-md-3">
                                <a href="{{route('home.edit',$isine->id)}}"  class="btn btn-warning">Edit</a>
                            </div>
                              </td>
                            </tr>
                         @endforeach
                      </tbody>
                    </table>
                </div>
                <div class="panel-heading">
                    <a href="/home/create">tamah data baru</a>
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
