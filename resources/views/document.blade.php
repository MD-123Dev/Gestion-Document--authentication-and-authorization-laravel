


        @extends('layouts.app')


@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                  @foreach ($documents as $doc)
                    <div class="card mt-2">

                        <div class="card-header">
                            <div><button class="btn btn-warning float-right">upload</button></div>
                            Title : {{$doc->Title}}
                        </div>
                        <div class="card-body">
                            <div>Description :{{$doc->Description}} </div>
                            <div>Date Creation :{{$doc->DateCreation}} </div>
                        </div>

                        <div class="card-footer  form-inline">

                                <a href="" class="btn btn-dark ">Detail</a>
                                @can('delete',$doc)
                                    <form method="POST" action="">
                                        @csrf
                                        @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')"  type="submit" class='btn btn-danger'>Delete</button>

                                    </form>
                                @endcan

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
