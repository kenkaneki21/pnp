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
                  <h4 class="card-title">ENTITY LIST</h4>
                  <form action="{{ route('search.entity') }}" method="post">
                    @csrf
                  <div class="row">
                      <div class="col-md-6">
                        <div class="input-group  ">
                      <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="submit">Search</button>
                      </div>
                     </div>
                      </div>
                       
                    </div>
                  </form>
                  
                 <div class="table-responsive">
                    <table class="table table-striped"  style="padding: 1rem 0.9375rem;">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Address</th>
                          <th>Contact</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <!--@php($i = 1) -->
                             @foreach($entities as $entity)
                            <tr >
                            <td class="py-1" style="padding: 1rem 0.9375rem;">
                            @if($entity->profile_pic)
                             <img src="{{ asset($entity->profile_pic)}}" width="50px" alt="profile"/> 
                            @else
                             <img src="{{ asset('template/images/faces/face5.jpg')}}" width="50px" alt="profile"/> 
                             @endif
                           </td>
                            <td style="padding: 1rem 0.9375rem;">{{ $entity->f_name}} {{ $entity->m_name}} {{ $entity->l_name}} </td>
                            <td style="padding: 1rem 0.9375rem;">   </td>
                            <td style="padding: 1rem 0.9375rem;">
                                 
                            </td>
                            <td style="padding: 1rem 0.9375rem;"><a href="{{ url('entity/enroll/'.$entity->id)}}" class="btn btn-primary btn-sm">Enroll</a> <a href="{{ url('entity/profile/'.$entity->id)}}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ url('entity/delete/'.$entity->id)}}" onclick="return confirm('Are you sure to delete')"  class="btn btn-danger btn-sm">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>
                    @if($markings == 1)
                     {{ $entities->links() }} 
                     @endif
                  </div>
                </div>
              </div>
            </div>
            
             
          </div>
      @endsection