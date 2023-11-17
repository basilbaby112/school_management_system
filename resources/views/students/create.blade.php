<x-layout>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Student Form</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Student Form</li>
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
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Of the student</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" placeholder="Enter name">
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Id</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" placeholder="Enter email">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admission Number</label>
                        <input type="text" name="admission_no" class="form-control" id="exampleInputEmail1" value="{{old('admission_no')}}" placeholder="Enter admission number">
                    </div>
                    @error('admission_no')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Class</label>
                        <input type="text" name="class" class="form-control" id="exampleInputEmail1" value="{{old('class')}}" placeholder="Enter class">
                    </div>
                    @error('class')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleSelectBorder">Gender</label>
                        <select class="custom-select" name="gender" id="exampleSelectBorder" value="{{old('gender')}}">
                            <option value="1">Male</option>
                            <option value="2">Femele</option>
                        </select>
                    </div>
                    @error('gender')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Number</label>
                        <input type="number" name="contact_no" class="form-control" id="exampleInputEmail1" value="{{old('contact_no')}}" placeholder="Enter contact number">
                    </div>
                    @error('contact_no')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Blood Group</label>
                        <input type="text" name="blood_group" class="form-control" id="exampleInputEmail1" value="{{old('blood_group')}}" placeholder="Enter blood group">
                    </div>
                    @error('blood_group')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" id="exampleInputEmail1" value="{{old('dob')}}" placeholder="Enter date of birth">
                    </div>
                    @error('dob')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="form-group">
                        <label for="">Upload Photo</label>
                    <input type="file" name="photo">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            <!-- /.card -->
            </div>
        </div>
        </div>
    </section>
</div>
</x-layout>