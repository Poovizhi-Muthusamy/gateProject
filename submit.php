<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="prof.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.3/purify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/webcam-easy@1.1.1/dist/webcam-easy.min.js"></script>
    <style>
        .avatar-upload {
    position: relative;
    max-width: 100px;
    cursor: pointer;
}

.avatar-preview {
    width: 100px;
    height: 100px;
    position: relative;
    border-radius: 50%;
    overflow: hidden;
}

#imagePreview {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.overlay-icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease;
}

.avatar-upload:hover .overlay-icon {
    opacity: 1;
}
.avatar-upload:hover {
    cursor: pointer;
}

@media print {
    body * {
        visibility: hidden;
    }

    .printable-modal,
    .printable-modal * {
        visibility: visible;
    }

    .printable-modal {
        position: absolute;
        left: 0;
        top: 0;
    }
}

#roundedImageContainer {
    background-color: #f4f4f4; /* Optional background color for image container */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optional shadow for image container */
}

#roundedImage {
    object-fit: cover;
    width: 100%;
    height: 100%;
}
        .capture-btn {
            background-color: #007bff;
            color: white;
        }

        .mt-custom {
            margin-top: 50px;
            /* Adjust this value as needed */
        }

        .hidden {
            display: none;
        }

        .img-fluid {
            width: 102px;
            /* approximate width for passport photo at typical screen resolution */
            height: 102px;
            /* approximate height for passport photo at typical screen resolution */
            object-fit: cover;
            /* this will ensure that the image covers the entire space without distortion */
        }
    </style>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Charts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Widgets</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icons </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span></a></li>
                                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a></li>
                                <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>
                                <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a></li>
                                <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a></li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Basic</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container mt-5 text-center">
                            <button class="btn btn-primary rounded-circle p-4 capture-btn" style="width: 100px; height: 100px;" onclick="openCamera()">
                                <i class="fas fa-camera fa-3x"></i>
                            </button>
                        </div>
                        <div class="container mt-2 text-center hidden" id="cameraSection">
                            <video id="webCam" autoplay playsinline width="400" height="300"></video>
                            <canvas id="canvas"></canvas>
                            <a onclick="takeAPicture()" class="btn btn-primary capture-btn hidden" id="captureButton">Capture</a>
                            <a onclick="retakePicture()" class="btn btn-secondary capture-btn hidden" id="retakeButton">Retake</a>




                        </div>
                        <div class="card mt-custom">


                            <div class="card">
                                <form id="detailsForm" class="form-horizontal">
                                    <div class="card-body">
                                        <!-- Hidden field for image data -->
                                        <input type="hidden" id="imageData" name="image" value="">

                                        <h4 class="card-title">Personal Info</h4>
                                        <h4 class="card-title">Personal Info</h4>
                                        <div class="form-group row">
                                            <input type="hidden" id="id" value="">
                                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="name" placeholder=" Name Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mno" class="col-sm-3 text-right control-label col-form-label">Mobile Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mno" placeholder="Mobile no">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="PA" class="col-sm-3 text-right control-label col-form-label">Person Accoupained</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="PA" placeholder="No of persons">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dep" class="col-sm-3 text-right control-label col-form-label">Department</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="dep">
                                                    <option value="">Select Department</option>
                                                    <option value="BE">BE</option>
                                                    <option value="BTECH">BTECH</option>
                                                    <option value="MCA">MCA</option>
                                                    <option value="MBA">MBA</option>
                                                    <option value="ME">ME</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staff" class="col-sm-3 text-right control-label col-form-label">Staff Name</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="staff">
                                                    <!-- Staff options will be populated here based on selected department -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="reson" class="col-sm-3 text-right control-label col-form-label">Reason</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="reson" name="reason"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-primary" id="submitButton">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <script>
                                const webCamElement = document.getElementById("webCam");
                                const canvasElement = document.getElementById("canvas");
                                const webcam = new Webcam(webCamElement, "user", canvasElement);


                                function openCamera() {
                                    $('#cameraSection').removeClass('hidden'); // Show the camera section
                                    webcam.start();
                                    $('#captureButton').removeClass('hidden'); // Show the capture button
                                    $('#retakeButton').addClass('hidden'); // Ensure the retake button is hidden
                                }

                                function takeAPicture() {
                                    picture = webcam.snap();
                                    $('#capturedImage').attr('src', picture); // Show the captured image
                                    $('#capturedImage').removeClass('hidden'); // Display the captured image
                                    $('#webCam').addClass('hidden'); // Hide the live video stream
                                    $('#captureButton').addClass('hidden'); // Hide the capture button
                                    $('#retakeButton').removeClass('hidden'); // Display the retake button
                                    webcam.stop(); // Stop the webcam
                                }


                                function retakePicture() {
                                    $('#capturedImage').addClass('hidden'); // Hide the captured image
                                    $('#webCam').removeClass('hidden'); // Show the live video stream
                                    $('#captureButton').removeClass('hidden'); // Show the capture button
                                    $('#retakeButton').addClass('hidden'); // Hide the retake button
                                    webcam.start(); // Restart the webcam
                                }

                                $(document).ready(function() {

                                    // Update Staff Based on Department
                                    $("#dep").change(function() {
                                        const staffByDepartment = {
                                            "BE": ["kalaiarasan"],
                                            "BTECH": ["kakashi"],
                                            "MCA": ["Eren"],
                                            "MBA": ["Hinata"],
                                            "ME": ["Mikasa"]
                                        };
                                        const selectedDept = $(this).val();
                                        const staffOptions = staffByDepartment[selectedDept] || [];

                                        $('#staff').empty();
                                        staffOptions.forEach(staffName => {
                                            $('#staff').append(`<option value="${staffName}">${staffName}</option>`);
                                        });
                                    });

                                    function generateQRCode() {
                                        let details = {
                                            name: $("#name").val(),
                                            mno: $("#mno").val(),
                                            PA: $("#PA").val(),
                                            dep: $("#dep").val(),
                                            staff: $("#staff").val()
                                        };
                                        let detailsString = JSON.stringify(details);

                                        // Clear previous QRCode if it exists
                                        $("#qrCodeSpace").empty();

                                        // Generate new QRCode
                                        let qrcode = new QRCode(document.getElementById("qrCodeSpace"), {
                                            text: detailsString,
                                            width: 150,
                                            height: 150
                                        });
                                    }

                                    $("#submitButton").click(function(e) {
                                        e.preventDefault();

                                        const formData = {
                                            name: $("#name").val(),
                                            mno: $("#mno").val(),
                                            PA: $("#PA").val(),
                                            dep: $("#dep").val(),
                                            staff: $("#staff").val(),
                                            reason: $("#reson").val(), // <-- add this line
                                            image: picture,
                                            submit_details: true
                                        };

                                        $.ajax({
                                            url: 'up.php',
                                            type: 'POST',
                                            data: formData,
                                            dataType: 'json',
                                            success: function(response) {
                                                if (response.status === "success") {
                                                    alert(response.message);
                                                    const id = response.id;
                                                    const inTime = response.inTime;

                                                    $('#id').val(id);
                                                    $('#modalToken').text(id);
                                                    $('#modalInTime').text(inTime);
                                                    $('#modalName').text($('#name').val());
                                                    $('#modalPA').text($('#PA').val());
                                                    $('#modalPhone').text($('#mno').val());


                                                    generateQRCode(); // Generate the QR Code

                                                    const modal = new bootstrap.Modal(document.getElementById('myModal'));
                                                    modal.show();

                                                    // Reset form after submission
                                                    $(".form-horizontal")[0].reset();
                                                    $('#staff').empty();
                                                    getLatestImage();
                                                } else {
                                                    alert(response.message);
                                                }
                                            },
                                            error: function() {
                                                alert("There was an error processing your request.");
                                            }
                                        });

                                    });

                                    function getLatestImage() {
                                        $.ajax({
                                            url: 'image.php',
                                            type: 'GET',
                                            dataType: 'text',
                                            success: function(data) {
                                                const imagePath = data.trim();
                                                $('#profileImage').attr('src', imagePath);
                                            },
                                            error: function() {
                                                console.error("Error fetching the latest image.");
                                            }
                                        });
                                    }
                                });
                            </script>
                            <script>



                            </script>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                            <div class="modal fade printable-modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable custom-modal-centered">
                                    <div class="modal-content">
                                        <div class="modal-header d-flex justify-content-center align-items-center">
                                            <!-- Optional: Rounded Logo Image -->
                                            <img src="logo.jpg" alt="Logo" class="logo-image me-3">
                                            <h5 class="mb-0 mt-3  pl-5">MKCE Invitation Pass</h5>
                                        </div>
                                        <div class="d-flex justify-content-center mb-3">
                                            <div class="responsive-rounded-image">
                                                <img src="<?php $image_path ?>" alt="Captured image of" class="img-fluid" id="profileImage">


                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-bold text-start">TOKEN Number</td>
                                                        <td id="modalToken">[Token Number Placeholder]</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="fw-bold text-start">In Time</td>
                                                        <td id="modalInTime">[In Time Placeholder]</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold text-start">Name</td>
                                                        <td id="modalName">[Name Placeholder]</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold text-start">Person Accompanied</td>
                                                        <td id="modalPA">[Person Accompanied Placeholder]</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold text-start">Phone No</td>
                                                        <td id="modalPhone">[Phone Number Placeholder]</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="row">
                                                <!-- QR Code -->
                                                <div class="col-6 d-flex justify-content-start">
                                                    <div id="qrCodeSpace" style="width: 150px; height: 150px; border: 1px dashed #ccc;"></div>
                                                </div>



                                                <!-- Description -->
                                                <div class="col-6 d-flex align-items-center justify-content-end">
                                                    <p>Kindly leave the campus before 4:40 pm</p>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center mt-3">
                                                <button onclick="window.print();" class="btn btn-primary">Print</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap tether Core JavaScript -->
                        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
                        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                        <!-- slimscrollbar scrollbar JavaScript -->
                        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
                        <!--Wave Effects -->
                        <script src="dist/js/waves.js"></script>
                        <!--Menu sidebar -->
                        <script src="dist/js/sidebarmenu.js"></script>
                        <!--Custom JavaScript -->
                        <script src="dist/js/custom.min.js"></script>
                        <!-- This Page JS -->
                        <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

                        <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
                        <script src="dist/js/pages/mask/mask.init.js"></script>
                        <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
                        <script src="assets/libs/select2/dist/js/select2.min.js"></script>
                        <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
                        <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
                        <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
                        <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
                        <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                        <script src="assets/libs/quill/dist/quill.min.js"></script>

</body>

</html>