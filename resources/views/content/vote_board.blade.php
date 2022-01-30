<!DOCTYPE html>
<html lang="en">
<!-- x -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- x/ -->

<head>
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <title>Oryfikry | BIPARTIT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('metch')}}/plugins/custom/fullcalendar/fullcalendar.bundlef552.css?v=7.1.8" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('metch')}}/plugins/global/plugins.bundlef552.css?v=7.1.8" rel="stylesheet" type="text/css" />
    <link href="{{asset('metch')}}/plugins/custom/prismjs/prismjs.bundlef552.css?v=7.1.8" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('metch')}}/css/style.bundlef552.css?v=7.1.8" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('metch')}}/css/themes/layout/header/base/lightf552.css?v=7.1.8" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('metch')}}/css/themes/layout/header/menu/lightf552.css?v=7.1.8" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('metch')}}/css/themes/layout/brand/darkf552.css?v=7.1.8" rel="stylesheet" type="text/css" />
    <link href="{{asset('metch')}}/css/themes/layout/aside/darkf552.css?v=7.1.8" rel="stylesheet" type="text/css" />
    <link href="{{asset('metch')}}/uiicon/css/uicons-regular-rounded.css" rel="stylesheet">
    {{-- cdn --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/datatables.min.css" />

    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- @csrf --}}
    {{-- table styling --}}
    <style>
        #tableUser_filter input {
            background: none;
            outline-color: none;
            outline: none;
            border: none;
            border-bottom: 1px solid currentColor;
            display: inline-block;
            line-height: 0.85;
        }

        .paginate_button .current {
            background: blue;
        }
    </style>
    <script>
           $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function swag_logout() {
            Swal.fire({
                title: 'Wanna Out?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes !'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="#">
            {{-- <img alt="Logo" src="{{asset('metch')}}/media/logos/logo-light.png" /> --}}
            <div class="text-white"><i class="fab fa-angrycreative fa-4x"></i></div>
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
          
            <!--end::Aside Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            {{-- ini menu --}}
            {{-- @include($menu) --}}
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->
                            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            </div>
                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->
                        <!--begin::Topbar-->
                        <div class="topbar">
                            <div class="topbar-item" >
                                <div
                                    class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                        {{$username}}</span>
                                    {{-- <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold"><i
                                                class="fas fa-power-off"></i></span>
                                    </span> --}}
                                </div>
                            </div>
                            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form> --}}
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                {{-- ini content --}}
                {{-- show error validation --}}
   
                {{-- end show  --}}
                
                @if ($is_voted == '1')
                    <div class="col-md-12">
                        <div class="card">
                            <div class="text-center" style="font-size:25px;">
                                You has been voted, your vote is Candidate 3
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="text-center">
                                you voted at 25 Feb 2022
                                <hr>
                                Quick Count
                                <br>
                            </div>
                        </div>
                    </div>
                @else
                <div class="row">
                    @php
                      $no = 1;  
                    @endphp
                    @forelse ($name as $name)
                    <div class="col-md-4 pl-4">
                        <!--begin::Engage Widget 14-->
                        <div class="card card-custom card-stretch gutter-b">
                            <div class="card-body p-15 pb-20">
                                <div class="row mb-10">
                                    <div class="col-md-12">
                                        <!--begin::Image-->
                                        <div class="card card-custom card-stretch">
                                            <div class="card-body p-0 rounded px-10 py-8 d-flex align-items-center justify-content-center"
                                                style="background-color: ;">
                                                <img src="{{asset('metch')}}/image/avatar-icon.jpg"style="width: 160px; max-width:200px; height:160px;">
                                            </div>
                                        </div>
                                        <!--end::Image-->
                                    </div>
                                    <div class="col-md-12 ">
                                        <h2 class="font-weight-bolder text-dark mb-7" style="font-size: 32px;">{{$name}}
                                        </h2>
                                        <div class="font-size-h2 mb-7 text-dark-50">From
                                            <span class="text-info font-weight-boldest ml-2">No urut - </span></div>
                                        <div class="line-height-xl text-justify">You also need to be able to accept that not every
                                            post is going to get your motor running. 
                                        </div>
                                    </div>
                                </div>

                                <!--begin::Buttons-->
                                <div class="d-flex">
                                    <button type="button" onclick="votes({{$no++}})"
                                        class="btn btn-primary font-weight-bolder mr-6 px-6 font-size-sm"> choose
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/File-plus.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path
                                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path
                                                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span></button>

                                </div>
                                <!--end::Buttons-->
                            </div>
                        </div>
                        <!--end::Engage Widget 14-->
                    </div>
                    @empty
                    no data.
                    @endforelse

                </div>
                @endif

<script>
    function votes(id){
    
            Swal.fire({
                title: 'Are you sure?',
                text: "Want to vote candidate "+id+" ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                   
                    var candidate = id;
                    var emp_id = '{{$emp_id}}'; 
                    // var _token = $('#token').content();
                    // console.log(_token);
                    $.ajax({
                        type: "POST",
                        url: "{{route('votes.store')}}",
                        data: {candidate:candidate, emp_id:emp_id},
                        success: function (data) {
                            $('body').hide();
                            console.log(data);
                        },
                        error: function (err) {
                            console.log(err);
                        }
                    });
                }
            })
    }
       
</script>






































                {{-- {{$content}} --}}
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">© <?= date('Y'); ?></span>
                            <a href="#" class="text-dark-75 text-hover-primary">Ory Fikry | ICT | BIPARTIT</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    {{-- <script src="{{asset('metch')}}/plugins/custom/datatables/datatables.bundlef552.js?v=7.1.8"></script> --}}
    <script src="{{asset('metch')}}/plugins/global/plugins.bundlef552.js?v=7.1.8"></script>
    {{-- <script src="{{asset('metch')}}/plugins/custom/prismjs/prismjs.bundlef552.js?v=7.1.8"></script> --}}
    <script src="{{asset('metch')}}/js/scripts.bundlef552.js?v=7.1.8"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{asset('metch')}}/plugins/custom/fullcalendar/fullcalendar.bundlef552.js?v=7.1.8"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('metch')}}/js/pages/widgetsf552.js?v=7.1.8"></script>
    {{-- cdn datatable --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-html5-1.6.5/datatables.min.js"></script>
    @stack('scripts')
    <!--end::Page Scripts-->
</body>
<!--end::Body-->


</html>
