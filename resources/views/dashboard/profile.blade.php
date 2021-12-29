@extends('layouts-admin.master')

@section('css')
<link href="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet"
    type="text/css" />
@endsection


@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الملف الشخصي</a></li>
                    <li class="breadcrumb-item active">       حسابي</li>
                </ol>
            </div>
            <h4 class="page-title">       حسابي</h4>
        </div>
    </div>
</div>
<!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('updateprofile',$user->id) }}">
                        @csrf
                        @method('put')
                        <h5 class="my-4 text-uppercase "><i class="mdi mdi-account-circle me-1"></i> تعديل البيانات
                            الشخصية</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">الاسم</label>
                                    <input type="text" name="name" class="form-control" id="firstname"
                                        placeholder="Enter name" value="{{$user->name}}" required>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">الايميل</label>
                                    <input type="text" name="email" class="form-control" id="lastname"
                                        placeholder="Enter email" value="{{$user->email}}" required>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        

                        <div class="text-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                    class="mdi mdi-content-save"></i> تعديل البيانات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




  
@endsection




@section('js')
<script src="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{asset('dashboard/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

<!-- Dashboar 1 init js-->
<script src="{{asset('dashboard/assets/js/pages/dashboard-1.init.js')}}"></script>
@endsection
