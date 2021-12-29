@extends('layouts-admin.master')

@section('css')
<link href="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet"
    type="text/css" />
@endsection


@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الملف الشخصي</a></li>
                        <li class="breadcrumb-item active">      لوحة التحكم</li>
                    </ol>
                </div>
                <h4 class="page-title">      لوحة التحكم</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">


    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('setting.add-setting')}}" enctype="multipart/form-data">
                        @csrf

                        <h5 class="my-4 text-uppercase "><i class="mdi mdi-account-circle me-1"></i>
                            اعدادات عامة
                        </h5>

                        <div class="row">


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label">  بريد الكتروني</label>
                                    <input type="text" value="{{old('email',$setting->email)}}" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email" required>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">  رقم الموبيل</label>
                                    <input type="number"  value="{{old('phone',$setting->phone)}}" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" required>
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">   العنوان</label>
                                    <input type="text" value="{{old('address',$setting->address)}}" name="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        id="address" required>
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="text-end">

                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                    class="mdi mdi-content-save"></i> حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
    <!-- end row -->




</div>
@endsection




@section('js')
<script src="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{asset('dashboard/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

<!-- Dashboar 1 init js-->
<script src="{{asset('dashboard/assets/js/pages/dashboard-1.init.js')}}"></script>
@endsection
