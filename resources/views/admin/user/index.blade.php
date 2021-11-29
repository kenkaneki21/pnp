@extends('admin.admin_master')

@section('admin')


      <div class="row">
            
             
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                  <h4 class="card-title">User List</h4><br>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add User </button>
    <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CREATE USER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form class="forms-sample" action="{{ route('user.add') }}" method="post">
                    {{ csrf_field() }}
                  <div class="modal-body">
                   
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Full Name</label>
                                  <input type="text" class="form-control" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Email</label>
                                  <input type="text" class="form-control" name="email" placeholder="Email ">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Password</label>
                                  <input type="text" class="form-control" name="password" value="MeganYoung" placeholder="Password">
                                </div>
                               
                            
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                    </form>
                </div>
              </div>
            </div>
                  
                  <div class="   ">
                   <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                   
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <!--@php($i = 1) -->
                             @foreach($users as $user)
                            <tr>
                            <th scope="row"> {{ $users->firstItem()+$loop->index }} </th>
                            <td>{{ $user->name}} </td>
                            
                            <td>
                                 
                            </td>
                            <td><a href="{{ url('course/edit/'.$user->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ url('course/delete/'.$user->id)}}" onclick="return confirm('Are you sure to delete')"  class="btn btn-danger btn-sm">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>

                   
                  
                  </div>
                     <ul class="pagination flex-wrap">{{ $users->links() }}</ul>
                </div>
              </div>
            </div>
            
             
          </div>
      @endsection