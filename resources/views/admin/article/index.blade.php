@extends('layouts.admin.app')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row ml-3">
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="d-flex ml-3">
                        <a href="/list-article/create" class="btn btn-primary">Create Article</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive" id="table_d">
                            <table id="table_siswa" class="table">
                            <thead class="text-black">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">title</th>
                                    <th scope="col">description</th>
                                    <th scope="col">slug</th>
                                    <th scope="col">body</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php $i=0 @endphp
                                    @foreach ($articles as $article)
                                    @php $i++ @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->slug }}</td>
                                        <td> {{ $article->description }}</td>
                                        <td>{{ $article->body }}</td>
                                        <td>
                                            <a href="/list-article/{{$article->id}}/edit" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form action="/list-article/{{$article->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('addon-style')
<link rel="stylesheet" type="text/css" media="screen" href="{{url('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css')}}">
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{url('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js')}}"></script>
@endpush
@push('prepend-script')
<script>
    $(document).ready( function () {
        $('#table_siswa').DataTable();
    } );
    </script>
@endpush
@push('addon-script')
     <!-- Datatables -->
     <script src="{{url('https://code.jquery.com/jquery-3.3.1.min.js')}}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
     <script type="text/javascript" charset="utf8" src="{{url('https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js')}}"></script>
@endpush

