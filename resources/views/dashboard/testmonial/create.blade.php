@extends('layouts-admin.master')

@section('css')
    <link href="{{ asset('dashboard/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet"
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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الملف الشخصي</a></li>
                            <li class="breadcrumb-item active">اضافة اراء العملاء</li>
                        </ol>
                    </div>
                    <h4 class="page-title">اضافة اراء العملاء </h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">


        </div>
        <!-- end row-->

        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('testmonial.store') }}" enctype="multipart/form-data">
                            @csrf

                            <h5 class="my-4 text-uppercase "><i class="mdi mdi-account-circle me-1"></i>اضافة اراء العملاء
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title_ar" class="form-label">اسم العميل</label>
                                        <input type="text" value="{{ old('name_ar') }}" name="name_ar"
                                            class="form-control @error('name_ar') is-invalid @enderror" id="name_ar"
                                            value="{{ old('name_ar') }}" required>
                                        @error('name_ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="title_ar" class="form-label">Client Name</label>
                                        <input type="text" value="{{ old('name_en') }}" name="name_en"
                                            class="form-control @error('name_en') is-invalid @enderror" id="name_en"
                                            value="{{ old('name_en') }}" required>
                                        @error('name_en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title_en" class="form-label"> الوظيفة</label>
                                        <input type="text" value="{{ old('job_ar') }}" name="job_ar"
                                            class="form-control @error('job_ar') is-invalid @enderror" id="title_en"
                                            value="old('job_ar')" required>
                                        @error('job_ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title_en" class="form-label"> Job title</label>
                                        <input type="text" value="{{ old('job_en') }}" name="job_en"
                                            class="form-control @error('job_en') is-invalid @enderror" id="title_en"
                                            value="old('job_en')" required>
                                        @error('job_en')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">صورة العميل</label>
                                        <input type="file" accept="image/png,  image/jpeg" name="image"
                                            class="form-control @error('image') is-invalid @enderror" id="image" required>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="subtitle_ar" class="form-label">رسالة العميل </label>
                                        <textarea type="text" name="message_ar" value="{{ old('message_ar') }}"
                                            class="form-control @error('message_ar') is-invalid @enderror" id="subtitle_ar"
                                            required></textarea>
                                        @error('message_ar')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="subtitle_ar" class="form-label">Client Message  </label>
                                        <textarea type="text" name="message_en" value="{{ old('message_en') }}"
                                            class="form-control @error('message_en') is-invalid @enderror" id="subtitle_ar"
                                            required></textarea>
                                        @error('message_en')
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



    </div>
@endsection




@section('js')
    <script src="{{ asset('dashboard/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('dashboard/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('dashboard/assets/js/pages/dashboard-1.init.js') }}"></script>
@endsection
