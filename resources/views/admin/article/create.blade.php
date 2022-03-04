@extends('layouts.admin.app')

@section('content')
   <div class="content">
        <div class="row">
          <div class="col-md-11">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">{{ $title }}</h5>
              </div>
              <div class="card-body">
                <form action="/list-article " method="POST"> 
                  @csrf
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>title</label>
                        <input type="text" name="title" class="form-control" placeholder="The title..." value="">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="The slug..." value="">
                      </div>
                    </div>
                    
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Description</label>
                      <textarea name="description" id="" cols="70" rows="5" placeholder="description" value=""></textarea>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Body</label>
                        <input type="text" name="body" class="form-control" placeholder="This is the body..." value="">
                      </div>
                    </div>
                    
                  </div>
                    <div class="row">
                    <div class="update ml-3">
                      <button type="submit" class="btn btn-primary btn-round">Create</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection