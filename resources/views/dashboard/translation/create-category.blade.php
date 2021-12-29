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
                        <li class="breadcrumb-item active">       اضافة لغة</li>
                    </ol>
                </div>
                <h4 class="page-title">      اضافة لغة </h4>
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
                    <form method="post" action="{{route('category-translation.store')}}"  enctype="multipart/form-data">
                        @csrf

                        <h5 class="my-4 text-uppercase "><i class="mdi mdi-account-circle me-1"></i>   اضافة لغة</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title_ar" class="form-label">اسم اللغة</label>
                                    <input type="text" value="{{old('title_ar')}}" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror" id="title_ar"
                                        value="{{old('title_ar')}}" required>
                                    @error('title_ar')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title_en" class="form-label"> language title</label>
                                    <input type="text" value="{{old('title_en')}}" name="title_en" class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                        value="old('title_en')" required>
                                    @error('title_en')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label"> السعر</label>
                                    <input type="number" min="0" step="0.01" value="{{old('price')}}" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                                        value="old('price')" required>
                                    @error('title_en')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">صورة اللغة</label>
                                    <input type="file" accept="image/png,  image/jpeg" name="image" class="form-control @error('image') is-invalid @enderror" id="image"
                                         required>
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subtitle_ar" class="form-label">عنوان فرعي</label>
                                    <input type="text" name="subtitle_ar" value="{{old('subtitle_ar')}}" class="form-control @error('subtitle_ar') is-invalid @enderror" id="subtitle_ar"
                                        value="{{old('subtitle_ar')}}" required>
                                    @error('subtitle')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subtitle_en" class="form-label"> Sub Title</label>
                                    <input type="text" name="subtitle_en" value="{{old('subtitle_en')}}" class="form-control @error('subtitle_en') is-invalid @enderror" id="subtitle_en"
                                        value="{{old('subtitle_en')}}" required>
                                    @error('subtitle_en')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="describe_ar" class="form-label"> وصف</label>
                                    <textarea  name="describe_ar" class="form-control @error('describe_ar') is-invalid @enderror" id="describe_ar"
                                        value="" required>
                                        {{old('describe_ar')}}
                                    </textarea>
                                    @error('describe_ar')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="describe_en" class="form-label"> Describe</label>
                                    <textarea name="describe_en" class="form-control @error('describe_en') is-invalid @enderror" id="describe_en"
                                        value="" required>
                                        {{old('describe_en')}}
                                    </textarea>
                                    @error('describe_en')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>




                        <div class="text-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                    class="mdi mdi-content-save"></i>  حفظ</button>
                        </div>
                    </form>
                </div>
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
