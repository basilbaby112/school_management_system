<x-layout>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>{{$data->name}}'s Attendance</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">{{$data->name}}'s Attendance</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                    <a href="{{route('home')}}" class="btn btn-success">Back</a>
                    </div>
                <!-- form elements -->
                <form method="post" action="{{route('attendance.store')}}">
                    @csrf
                    <input type="hidden" name="student_id" value="{{$data->id}}">
                    <div class="card-body">
                      <label for="exampleFormControlInput1">Attendance Date</label>
                      <input type="date" class="form-control" name="attendance_created" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                        @error('attendance_created')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    <div class="card-body">
                    <label for="">Attendance Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="attendance_status" id="exampleRadios1" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                          Present
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="attendance_status" id="exampleRadios2" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                          Late Entry
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="attendance_status" id="exampleRadios3" value="3">
                        <label class="form-check-label" for="exampleRadios3">
                          Half Day
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="attendance_status" id="exampleRadios3" value="4">
                        <label class="form-check-label" for="exampleRadios3">
                          Absent
                        </label>
                      </div>
                    </div>
                        @error('attendance_status')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                  </form>
                </div>
                </div>
                 <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <h2>Attendance Report</h2>
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Sl.No</th>
                      <th>Attendance Date</th>
                      <th>Attendance Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($attendance_datas as $value)

                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$value->attendance_created}}</td>
                      <td>
                        {{ 
                            $value->attendance_status == 1 ? 'Present' : 
                            ($value->attendance_status == 2 ? 'Late Entry' : 
                            ($value->attendance_status == 3 ? 'Half Day' : 
                            ($value->attendance_status == 4 ? 'Absent' : '')))
                        }}
                    </td>
                      <td></td>
                    </tr>
                        
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
        </section>
                    <!-- /.card-header -->
    </div>
</x-layout>
