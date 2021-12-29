@extends('layouts-admin.master')

@section('css')
<link href="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('dashboard/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet"
    type="text/css" />

    <link href="{{asset('dashboard/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
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

    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">    العملاء</h4>


                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">

                        <thead>
                            <tr>
                                <th> الرقم التسلسلي </th>
                                <th> اسم العميل</th>
                                <th>رقم العميل</th>
                                <th>البريد الالكتروني </th>
                                <th>  الرساله</th>
                                <th>ادارة</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                 <td>{{$contact->name}}</td>
                                 <td>{{$contact->phone}}</td>
                                 <td>{{$contact->email}}</td>
                                 <td>{{$contact->message}}</td>

                                <td>
                                    <form action="{{route('contacts.print.delete',$contact->id)}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button  class="delete_ancor btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->




</div>

{{--  <div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1" role="dialog"
    aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <form action="{{route('contacts.print.delete')}}" method="POST" class="remove-record-model">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <button type="button" class="close Endless" data-dismiss="modal" aria-hidden="true"
                        aria-label="Close">×</button>
                    <h4 class="modal-title text-center" id="custom-width-modalLabel"> تاكيد حذف فاتورة التفريغ</h4>
                </div>
                <div class="modal-body">
                    <h4>هل أنت متأكد من الحذف</h4>
                    <input type="hidden" , name="" id="app_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect Endless"
                        data-dismiss="modal">غلق</button>
                    <button type="submit"
                        class="btn btn-danger waves-effect remove-data-from-delete-form">حذف</button>
                </div>

            </form>
        </div>
    </div>
</div>  --}}
@endsection




@section('js')
<script src="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{asset('dashboard/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

<!-- Dashboar 1 init js-->
<script src="{{asset('dashboard/assets/js/pages/dashboard-1.init.js')}}"></script>


<script src="{{asset('dashboard/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('dashboard/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('dashboard/assets/js/pages/datatables.init.js')}}"></script>

<script>
    $(document).on('click','.deleteExpense',function(){
            var userID=$(this).attr('data-userid');
            console.log(userID)
            $('#app_id').val(userID);
            $('#applicantDeleteModal').modal('show');
        });

        $(document).on('click','.Endless','.Endless',function(){
            $('#applicantDeleteModal').modal('hide');
        });
</script>
@endsection
