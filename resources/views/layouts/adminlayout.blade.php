<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style2.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    @livewireStyles
     
   <style>
    .loader {
        z-index: 20;
    position: absolute;
    left: 40%;
    top: 40%;
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #325C8E;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
    }
    
    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style>
   @livewireStyles

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            {{-- Start navbar --}}
            @include('admin.top_navbar')
            {{-- End navbar --}}
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    {{-- Sidebar --}}
                    @include('admin.sidebar')
                    {{-- End Sidebar --}}
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @livewireScripts

    @include('sweetalert::alert')
    <!-- Required Jquery -->

    <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves js -->
    <script src="{{asset('assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- menu js -->
    <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/js/vertical/vertical-layout.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>

    <script src="{{asset('assets/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('assets/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('assets/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('assets/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-table-export.js')}}"></script>


    <!-- ---------------data table script-------------- -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'dd-mm-yy',
                clickInput: true,
            });
        });
    </script>


    @if(request()->routeIs(['admin.administratorlist']) != '1' && request()->routeIs(['admin.memberlist']) != '1' && request()->routeIs(['admin.pvaccumulationhistory']) != '1' && request()->routeIs(['admin.pvusagehistory']) != '1' && request()->routeIs(['admin.pvwithdrawalrequesthistory']) != '1' && request()->routeIs(['admin.pvconversionapplicationdetails']) != '1' && request()->routeIs(['admin.pvtransmissionapplicationdetails']) != '1' && request()->routeIs(['admin.noticelist']) != '1' && request()->routeIs(['admin.faqlist']) != '1' && request()->routeIs(['admin.oneononeinquiry']) != '1' && request()->routeIs(['admin.elimpointapplicatondetails']) != '1' && request()->routeIs(['admin.elimpointapplicatiionhistory']) != '1' && request()->routeIs(['admin.elimpointtransferhistory']) != '1' && request()->routeIs(['admin.tpointdetailsbymember']) != '1' && request()->routeIs(['admin.mlmusermanagement']) != '1' && request()->routeIs(['admin.tradingorderhistory']) != '1')
    <script>
        $('table').dataTable({
            "pageLength": 30
        });
    </script>
    @else
    @endif

   
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".swal2-container").hide('blind', {}, 400)
            }, 3000);
        });
    </script>
  



    <script>
        var table = $('#admin_table').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pagingType: "full_numbers",
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_administratorlist") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Name',
                    name: 'name'
                },
                {
                    data: 'Dc',
                    name: 'dc'
                },
                {
                    data: 'State',
                    name: 'state'
                },
                {
                    data: 'Last_login',
                    name: 'last_login'
                },
                {
                    data: 'Registration_date',
                    name: 'registration_date'
                },
                {
                    data: 'Correction',
                    name: 'correction'
                }

            ]

        });
    </script>

    <script>
        var table = $('#memberlist').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_member_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Utype',
                    name: 'utype'
                },
                {
                    data: 'UserID',
                    name: 'userid'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Email',
                    name: 'email'
                },
                {
                    data: 'Elim_Points',
                    name: 'elim_points'
                },
                {
                    data: 'T_points',
                    name: 't_points'
                },
                {
                    data: 'Available_PV',
                    name: 'available_pv'
                },
                {
                    data: 'Earned_PV',
                    name: 'earned_pv'
                },
                {
                    data: 'State',
                    name: 'state'
                },
                {
                    data: 'Registration_Date',
                    name: 'registration_date'
                },
                {
                    data: 'Correction',
                    name: 'correction'
                },
            ]

        });
    </script>

    <script>
        var table = $('#pvaccumulationhistorylist').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_pv_accumulation_history_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Earning_Type',
                    name: 'earning_type'
                },
                {
                    data: 'Available_Earned_Bonus',
                    name: 'available_earned_bonus'
                },
                {
                    data: 'Accumulated_Earned_Bonus',
                    name: 'accumulated_earned_bonus'
                },
                {
                    data: 'Accumulation_Date',
                    name: 'accumulation_date'
                },

            ]

        });
    </script>

    <script>
        var table = $('#pvusagehistorylist').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_pv_usage_history_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'PV_Type',
                    name: 'pv_type'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Type_of_use',
                    name: 'type_of_use'
                },
                {
                    data: 'Price',
                    name: 'price'
                },
                {
                    data: 'Date_of_use',
                    name: 'date_of_use'
                },

            ]

        });
    </script>

    <script>
        var table = $('#pvwithdrawalhistorylist').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_pv_withdrawal_history_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Amount',
                    name: 'amount'
                },
                {
                    data: 'Status',
                    name: 'status'
                },
                {
                    data: 'Approval',
                    name: 'approval'
                },
                {
                    data: 'Confirmation',
                    name: 'confirmation'
                },
                {
                    data: 'Application_date_and_time',
                    name: 'application_date_and_time'
                },

            ]

        });
    </script>

    <script>
        var table = $('#pvconversionapplicationdetaillistdata').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_pv_conversion_application_detail") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Type',
                    name: 'type'
                },
                {
                    data: 'Conversion_Quantity',
                    name: 'conversion_quantity'
                },
                {
                    data: 'State',
                    name: 'state'
                },
                {
                    data: 'Approval_Confirmation',
                    name: 'approval_confirmation'
                },
                {
                    data: 'Application_Date_And_Time',
                    name: 'application_date_and_time'
                },
                {
                    data: 'Detail',
                    name: 'detail'
                },

            ]

        });
    </script>

    <script>
        var table = $('#pvtransmissionapplicationdetailtable').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_pv_transmission_application_detail") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Amount',
                    name: 'amount'
                },
                {
                    data: 'State',
                    name: 'state'
                },
                {
                    data: 'Approval_Confirmation',
                    name: 'approval_confirmation'
                },
                {
                    data: 'Application_Date_And_Time',
                    name: 'application_date_and_time'
                },
                {
                    data: 'Detail',
                    name: 'detail'
                },
            ]

        });
    </script>

    <script>
        var table = $('#notice-table').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_notice_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Notice_Title',
                    name: 'notice_title'
                },
                {
                    data: 'Used',
                    name: 'used'
                },
                {
                    data: 'Views',
                    name: 'views'
                },
                {
                    data: 'Registration_Date',
                    name: 'registration_date'
                },
                {
                    data: 'Correction',
                    name: 'cForrection'
                }
            ]

        });
    </script>

    <script>
        var table = $('#faqlist').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_faq_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Category',
                    name: 'category'
                },
                {
                    data: 'Notice_Title',
                    name: 'notice_title'
                },
                {
                    data: 'Used',
                    name: 'used'
                },
                {
                    data: 'Registration_Date',
                    name: 'registration_date'
                },
                {
                    data: 'Correction',
                    name: 'correction'
                }
            ]

        });
    </script>


    <script>
        var table = $('#oneononeinquirytable').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_oneononeinquiry_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Inquiry',
                    name: 'inquiry'
                },
                {
                    data: 'Contents',
                    name: 'contents'
                },
                {
                    data: 'Answer',
                    name: 'answer'
                },
                {
                    data: 'Inquiry_Date',
                    name: 'inquiry_date'
                },
            ]

        });
    </script>

    <script>
        var table = $('#point_recharge_detail').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_point_recharge_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Member_Type',
                    name: 'member_type'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Amount',
                    name: 'amount'
                },
                {
                    data: 'Status',
                    name: 'status'
                },
                {
                    data: 'Viewdeposite',
                    name: 'viewdeposite'
                },
                {
                    data: 'Approval',
                    name: 'approval'
                },
                {
                    data: 'Application_Date_And_Time',
                    name: 'Application_Date_And_Time'
                }
            ]

        });
    </script>

    <script>
        var table = $('#elim_point_exchange_table').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_point_exchange_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Member_Type',
                    name: 'member_type'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Elim_Quantity_Before_Exhange',
                    name: 'elim_quantity_before_exhange'
                },
                {
                    data: 'Tp_Quantity_After_Exhange',
                    name: 'tp_quantity_after_exhange'
                },
                {
                    data: 'Look',
                    name: 'look'
                },
                {
                    data: 'Exchange_Date_And_Time',
                    name: 'exchange_date_and_time'
                },

            ]

        });
    </script>

    <script>
        var table = $('#elim_point_transfer_history').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_point_transfer_list") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Member_Type',
                    name: 'member_type'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Quantity',
                    name: 'quantity'
                },
                {
                    data: 'Look',
                    name: 'look'
                },
                {
                    data: 'Exchange_Date_And_Time',
                    name: 'exchange_date_and_time'
                },

            ]

        });
    </script>

    <script>
        var table = $('#t_point_table').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_t_point_member") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Member_Type',
                    name: 'member_type'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Increase',
                    name: 'increase'
                },
                {
                    data: 'Quantity',
                    name: 'quantity'
                },
                {
                    data: 'Contents',
                    name: 'contents'
                },
                {
                    data: 'Application_Date_And_Time',
                    name: 'application_date_and_time'
                }

            ]

        });
    </script>

    <script>
        var table = $('#mlmmemberlist').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_mlmmemberlist") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'Member_Type',
                    name: 'member_type'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Email',
                    name: 'email'
                },
                {
                    data: 'Elim_Points',
                    name: 'elim_points'
                },
                {
                    data: 'T_Points',
                    name: 't_points'
                },
                {
                    data: 'AP',
                    name: 'ap'
                },
                {
                    data: 'EP',
                    name: 'ep'
                },
                {
                    data: 'State',
                    name: 'state'
                },
                {
                    data: 'Rdate',
                    name: 'rdate'
                },
                {
                    data: 'View_Tree',
                    name: 'view_tree'
                }

            ]

        });
    </script>

    <script>
        var table = $('#trading_order_table').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            serverSide: true,
            dom: 'Bflrtip',
            pageLength: 30,
            ajax: {
                url: '{{ route("admin.datatable_trading_order_table") }}',
                'data': function(data) {}
            },
            columns: [{
                    data: 'No',
                    name: 'no'
                },
                {
                    data: 'PK',
                    name: 'pk'
                },
                {
                    data: 'ID',
                    name: 'id'
                },
                {
                    data: 'Nickname',
                    name: 'nickname'
                },
                {
                    data: 'Trading_Type',
                    name: 'trading_type'
                },
                {
                    data: 'Subject',
                    name: 'subject'
                },
                {
                    data: 'State',
                    name: 'state'
                },
                {
                    data: 'Detail',
                    name: 'detail'
                },
                {
                    data: 'Statechance',
                    name: 'statechance'
                },
                {
                    data: 'Date',
                    name: 'date'
                }

            ]

        });
    </script>

    <script>
        var mindate = new Date();
        mindate.setDate(mindate.getDate() - 8);
        var maxdate = new Date();
        maxdate.setDate(maxdate.getDate() - 1);
        $('#minMaxExample').datepicker({
            language: 'en',
            range: true,
            minDate: mindate,
            maxDate: maxdate,
            multipleDates: true,
            multipleDatesSeparator: " - "
        })
    </script>

    <script>
        var mindate = new Date();
        mindate.setDate(mindate.getDate() - 8);
        var maxdate = new Date();
        maxdate.setDate(maxdate.getDate() - 1);
        $('#minMaxExample').datepicker({
            language: 'en',
            range: true,
            minDate: mindate,
            maxDate: maxdate,
            multipleDates: true,
            multipleDatesSeparator: " - "
        })
    </script>


</body>

</html>