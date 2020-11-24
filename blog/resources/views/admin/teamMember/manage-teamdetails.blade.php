@extends('admin.master')
@section('body')



  <div class="col-lg-10 offset-1">
      <div class="card">
          <h3 class="text-center text-success">{{Session::get('message')}}</h3>
          <div class="card-body">
              <table class="table table-bordered">

<tr>

    <th>Sl No.</th>
    <th>Team Member ID</th>
    <th>Team Member Name</th>
    <th>Team Member Description</th>
    <th>Team Member Picture</th>
    <th>Publication Status</th>
    <th>Action</th>



</tr>
                  @php($i=1)
                  @foreach($teams as $team)



                  <tr>

                      <td>{{$i++}}</td>
                      <td>{{$team->memberid}}</td>
                      <td>{{$team->name}}</td>
                      <td>{{$team->description}}</td>
                      <td><img src="{{asset($team->photo)}}"></td>
                      <td>{{$team->publicationtstatus == 1?'published':'unpublished'}}</td>



                      <td>

                         @if($team->publicationtstatus == 1)
                          <a href="{{route('unpublished-team',['id'=>$team->id])}}" class="btn btn-info">
                              <span><i class="fa fa-arrow-up"></i></span>
                          </a>
                          @else
                          <a href="{{route('published-team',['id'=>$team->id])}}" class="btn btn-warning">
                              <span><i class="fa fa-arrow-down"></i></span>
                          </a>
                        @endif

                          <a href="{{route('edit-team',['id'=>$team->id])}}" class="btn btn-success">
                              <span><i class="fa fa-edit"></i></span>
                          </a>
                             <a href="{{route('delete-team',['id'=>$team->id])}}" class="btn btn-danger">
                              <span><i class="fa fa-trash"></i></span>
                          </a>


                      </td>

                  </tr>
                  @endforeach


              </table>
          </div>
      </div>

  </div>
@endsection
