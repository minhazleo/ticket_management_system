@extends('backend.layout.app')
@section('title', 'Ticket Management System')
@section('content')






<div class="content">
    <div class="container-fluid">
        <div class="wrapper">

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">

    <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">


    <div class="brand flex-column-auto " id="kt_brand">
        <button class="brand-toggle btn btn-sm px-0" style="margin-right: -25px;" id="kt_aside_toggle">
            <i class="fas fa-bars text-white"></i>
        </button>
    </div>

</div>

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

<div id="kt_header" class="header  header-fixed " >

</div>

    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="subheader  subheader-solid " id="kt_subheader" style="background: #d3f9ee;">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">


        <div class="d-flex align-items-center flex-wrap container-fluid px-0">
        <h4 class="text-success font-weight-bold my-2 mr-5">
            General Settings
        </h4>
        </div>
    </div>
</div>
<script type="text/javascript">
    function moveToPreviousDate(){
        document.getElementById('date_prev_next').value='prev';
        document.getElementById('datefilterCP').submit();
    }
    function moveToNextDate(){
        document.getElementById('date_prev_next').value='next';
        document.getElementById('datefilterCP').submit();
    }
    function moveToPreviousDateDashboard(){
        document.getElementById('date_prev_next').value='prev';
        document.getElementById('datefilter').submit();
    }
    function moveToNextDateDashboard(){
        document.getElementById('date_prev_next').value='next';
        document.getElementById('datefilter').submit();
    }
</script>

    <div class="d-flex flex-column-fluid">
        <div class=" container-fluid ">
                <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Update General Settings
            </h3>
        </div>
        <!--begin::Form-->
        <form method="POST" action="http://admin.chokrojan.com/general-settings" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">            <input type="hidden" name="_token" value="yMxIlQoKh3DjDEnEWGA4fZ8RBrhqn0aGm8jIcfwi">            <div class="card-body">
                <h4>Common Settings</h4>
                <div class="card border-0">
                    <div class="card-body card-rounded bg-danger-o-20 mb-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
        <label for="site_name" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Site Name
    </label>
        <input type="text" id="site_name" class="form-control  "
           placeholder=""
           name="site_name" value="Chokrojan Bangladesh"
           required

    />
    </div>
                                <div class="form-group ">
        <label for="booking_cancel_time" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Booking Auto Cancel Before Schedule Start Time (Minutes)
    </label>
        <input type="text" id="booking_cancel_time" class="form-control  "
           placeholder=""
           name="booking_cancel_time" value="30"
           required

    />
    </div>
                                <div class="form-group ">
        <label for="permitted_seat_block_release_time" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Permitted Block Seat Auto Release Before Schedule Start Time (Minutes)
    </label>
        <input type="text" id="permitted_seat_block_release_time" class="form-control  "
           placeholder=""
           name="permitted_seat_block_release_time" value="30"
           required

    />
    </div>
                                <div class="form-group ">
        <label for="advance_booking" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Advance Booking Allow For Next (Days)
    </label>
        <input type="text" id="advance_booking" class="form-control  "
           placeholder=""
           name="advance_booking" value="15"
           required

    />
    </div>
                                <div class="form-group ">
        <label for="selected_seat_lifetime" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Selected Seat Lifetime (Seconds)
    </label>
        <input type="text" id="selected_seat_lifetime" class="form-control  "
           placeholder=""
           name="selected_seat_lifetime" value="100"
           required

    />
    </div>
                                <div class="form-group ">
        <label for="passenger_star_rating" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Passenger Star Rating ( 1 Star = ? Ticket )
    </label>
        <input type="text" id="passenger_star_rating" class="form-control  "
           placeholder=""
           name="passenger_star_rating" value="10"
           required

    />
    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div>
                                        <label for="" class="required">Site Logo</label>
                                    </div>

                                    <div class="image-input card card-border" id="kt_image_2" style="border-radius: 0px;">
                                        <div class="image-input-wrapper"
                                             style="background-image: url('https://chokrojan-bucket.s3.ap-southeast-1.amazonaws.com/company/logos/KrWuIKDUoFRDPQBCB0cxyz1vXaDdBTi3pTtiw2kA.png');background-position: center; background-size: contain; border-radius: 0px;"></div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-light btn-hover-text-success btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="logo" accept=".png, .jpg, .jpeg"/>
                                            <input type="hidden" name="image_remove"/>
                                        </label>

                                        <span
                                            class="btn btn-xs btn-icon btn-circle btn-light btn-hover-text-danger btn-shadow"
                                            data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group ">

    <div class="">
                <label class="checkbox checkbox-outline checkbox-success" for="booking">
        <input type="checkbox" id="booking" class="form-control  "
               name="booking" value="1"   checked >
            <span></span>Seat Booking
        </label>
    </div>
    </div>
                                <div class="form-group ">

    <div class="">
                <label class="checkbox checkbox-outline checkbox-success" for="vip_booking">
        <input type="checkbox" id="vip_booking" class="form-control  "
               name="vip_booking" value="1"   checked >
            <span></span>VIP Booking
        </label>
    </div>
    </div>
                                <div class="form-group ">

    <div class="">
                <label class="checkbox checkbox-outline checkbox-success" for="goods_charge">
        <input type="checkbox" id="goods_charge" class="form-control  "
               name="goods_charge" value="1"   checked >
            <span></span>Goods Charge
        </label>
    </div>
    </div>
                                <div class="form-group ">

    <div class="">
                <label class="checkbox checkbox-outline checkbox-success" for="callerman_commission">
        <input type="checkbox" id="callerman_commission" class="form-control  "
               name="callerman_commission" value="1"  >
            <span></span>Callerman Commission
        </label>
    </div>
    </div>
                                <div class="form-group ">

    <div class="">
                <label class="checkbox checkbox-outline checkbox-success" for="discount">
        <input type="checkbox" id="discount" class="form-control  "
               name="discount" value="1"   checked >
            <span></span>Discount
        </label>
    </div>
    </div>
                                <div class="form-group ">

    <div class="">
                <label class="checkbox checkbox-outline checkbox-success" for="discount_show_in_ticket">
        <input type="checkbox" id="discount_show_in_ticket" class="form-control  "
               name="discount_show_in_ticket" value="1"   checked >
            <span></span>Discount Show in Ticket
        </label>
    </div>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Counter Settings</h4>
                        <div class="card border-0">
                            <div class="card-body card-rounded bg-success-o-20">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>
                                                SMS Send On Counter Ticket Issue :
                                                                                                    <span class="label label-light-danger label-inline label-lg"><i class="fas fa-check-circle text-danger mr-1"></i> INACTIVE</span>
                                                                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
        <label for="booking_lifetime" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Counter Booking Lifetime (Minutes) [ 0 = Inactive ]
    </label>
        <input type="text" id="booking_lifetime" class="form-control  "
           placeholder=""
           name="booking_lifetime" value="300"
           required

    />
    </div>
                                        <div class="form-group ">
        <label for="counter_sales_allow_time" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Counter Sales Allow After Schedule Start Time (Minutes)
    </label>
        <input type="text" id="counter_sales_allow_time" class="form-control  "
           placeholder=""
           name="counter_sales_allow_time" value="0"
           required

    />
    </div>
                                        <div class="form-group ">
        <label for="counter_max_seat_per_ticket" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Maximum Seat Limit Per Counter Ticket
    </label>
        <input type="text" id="counter_max_seat_per_ticket" class="form-control  "
           placeholder=""
           name="counter_max_seat_per_ticket" value="6"
           required

    />
    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">

    <div class="">
                    <p class="mb-5">Counter Sold Ticket Cancel</p>
                <label class="checkbox checkbox-outline checkbox-success" for="counter_cancel_allow">
        <input type="checkbox" id="counter_cancel_allow" class="form-control  "
               name="counter_cancel_allow" value="1"   checked >
            <span></span>Counter Cancel Allow
        </label>
    </div>
    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
        <label for="counter_cancel_fine" class="">
                Counter Sold Ticket Cancel Fine (%)
    </label>
        <input type="text" id="counter_cancel_fine" class="form-control  "
           placeholder=""
           name="counter_cancel_fine" value="0"


    />
    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
        <label for="counter_cancel_allow_time" class="">
                Counter Sold Ticket Cancel Allow Before Schedule Start Time (Minutes)
    </label>
        <input type="text" id="counter_cancel_allow_time" class="form-control  "
           placeholder=""
           name="counter_cancel_allow_time" value="30"


    />
    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Online Settings</h4>
                        <div class="card border-0">
                            <div class="card-body card-rounded bg-warning-o-20">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>
                                                SMS Send On Online  Ticket Issue :
                                                                                                    <span class="label label-light-danger label-inline label-lg"><i class="fas fa-check-circle text-danger mr-1"></i> INACTIVE</span>
                                                                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
        <label for="online_booking_lifetime" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Online Booking Lifetime (Minutes)
    </label>
        <input type="text" id="online_booking_lifetime" class="form-control  "
           placeholder=""
           name="online_booking_lifetime" value="15"
           required

    />
    </div>
                                        <div class="form-group ">
        <label for="online_sales_disallow_time" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Online Sales Disallow Before Schedule Start Time (Minutes)
    </label>
        <input type="text" id="online_sales_disallow_time" class="form-control  "
           placeholder=""
           name="online_sales_disallow_time" value="30"
           required

    />
    </div>
                                        <div class="form-group ">
        <label for="online_max_seat_per_ticket" class="required">
                    <i class="far fa-star text-danger fa-sm" title="Required" data-toggle="tooltip" data-placement="top"></i>
                Maximum Seat Limit Per Online Ticket
    </label>
        <input type="text" id="online_max_seat_per_ticket" class="form-control  "
           placeholder=""
           name="online_max_seat_per_ticket" value="6"
           required

    />
    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">

    <div class="">
                    <p class="mb-5">Online Sold Ticket Cancel</p>
                <label class="checkbox checkbox-outline checkbox-success" for="online_cancel_allow">
        <input type="checkbox" id="online_cancel_allow" class="form-control  "
               name="online_cancel_allow" value="1"   checked >
            <span></span>Online Cancel Allow
        </label>
    </div>
    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
        <label for="online_cancel_fine" class="">
                Online Sold Ticket Cancel Fine (%)
    </label>
        <input type="text" id="online_cancel_fine" class="form-control  "
           placeholder=""
           name="online_cancel_fine" value="0"


    />
    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
        <label for="online_cancel_allow_time" class="">
                Online Sold Ticket Cancel Allow Before Schedule Start Time (Hours)
    </label>
        <input type="text" id="online_cancel_allow_time" class="form-control  "
           placeholder=""
           name="online_cancel_allow_time" value="24"


    />
    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>
                                                Online Commission :
                                                    <span class="label label-light-success label-inline label-lg">AC <i class="far fa-money-bill-alt text-success mx-1"></i>50</span>
                                                    <span class="label label-light-danger label-inline label-lg">NonAC <i class="far fa-money-bill-alt text-danger mx-1"></i>30</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-pill btn-primary">Submit</button>
                <button type="reset" class="btn btn-pill btn-warning">Reset</button>
                <a class="btn btn-pill btn-secondary" href="http://admin.chokrojan.com/home">Cancel</a>
            </div>
        </form>
        <!--end::Form-->
    </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">

    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">
            User Profile

        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>


    <div class="offcanvas-content pr-5 mr-n5">

        <div class="separator separator-dashed mt-8 mb-5"></div>

        <div class="navi navi-spacer-x-0 py-3">
            <a class="navi-item" href="http://admin.chokrojan.com/user-profile/648/edit">
                <div class="navi-link">
                    <div class="navi-text">
                        <div class="font-weight-bold text-success text-hover-warning" style="font-size: 15px;">
                            <i class="fas fa-user-edit text-center" style="width: 30px;"></i> Edit Profile
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="navi navi-spacer-x-0 py-3">

            <a class="navi-item" href="http://admin.chokrojan.com/logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="navi-link">
                    <div class="navi-text">
                        <div class="font-weight-bold text-success text-hover-warning" style="font-size: 15px;">
                            <i class="fas fa-sign-out-alt text-center" style="width: 30px;"></i> Logout
                        </div>
                    </div>
                </div>
            </a>

            <form id="logout-form" action="http://admin.chokrojan.com/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="yMxIlQoKh3DjDEnEWGA4fZ8RBrhqn0aGm8jIcfwi">            </form>
        </div>
    </div>
</div>




    <div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon"><!--begin::Svg Icon | path:media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>

</div>


        <script>var HOST_URL = "";</script>



        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
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
                "secondary": "#212121",
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
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
        </script>


        <script src="http://admin.chokrojan.com/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="http://admin.chokrojan.com/js/scripts.bundle.js" type="text/javascript"></script>
        <script src="http://admin.chokrojan.com/js/script.js" type="text/javascript"></script>
        <script src="http://admin.chokrojan.com/js/validation.js" type="text/javascript"></script>


        <script src="http://admin.chokrojan.com/js/pages/crud/file-upload/image-input.js"
        type="text/javascript"></script>

</div>
</div>
</div>












@endsection
