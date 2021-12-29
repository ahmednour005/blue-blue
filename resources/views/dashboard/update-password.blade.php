@extends('layouts-admin.master')

@section('css')
<link href="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الملف الشخصي</a></li>
                    <li class="breadcrumb-item active"> حسابي</li>
                </ol>
            </div>
            <h4 class="page-title"> حسابي</h4>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('updatepassword',$user->id) }}">
                    @csrf
                    @method('put')
                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> تغير كلمة المرور
                    </h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label"> كلمة المرور القديمة</label>
                                <input type="password" name="oldpassword" class="form-control" id="password" placeholder="أدخل كلمة المرور الجديدة">
                                @error('oldpassword')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label"> كلمة المرور الجديدة</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="أدخل كلمة المرور الجديدة">
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="email" class="form-label"> تأكيد كلمة المرور الجديدة</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="تأكيد كلمة المرور الجديدة" />
                                @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> تعديل كلمة المرور</button>
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