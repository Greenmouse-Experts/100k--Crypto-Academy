<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> 100k Crypto Academy | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="100k Crypto Academy |  Dashboard" name="100k Crypto Academy |  Dashboard" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::asset('admin/assets/images/Logo-fav.png')}}" />

    <!-- Bootstrap Css -->
    <link href="{{URL::asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{URL::asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- style Css -->
    <link href="{{URL::asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{URL::asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Font Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 8000);
    </script>
</head>

<body data-sidebar="dark" data-layout-mode="light">
    <!-- Alerts  Start-->
    @include('sweetalert::alert')
    <!-- Alerts End -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Header -->
        @includeIf('layouts.admin-header')
        <!-- Header Ends -->

        <!-- Sidebar -->
        @includeIf('layouts.admin-sidebar')
        <!-- Sidebar Ends -->

        <!-- Page-Content -->
        @yield('page-content')
        <!-- Page-Content Ends -->
        @includeIf('layouts.admin-footer')
    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Modal START -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-4 py-2">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Kindly Create...
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="dropover">
                                <div class="for-drop">
                                    <i class="bi bi-1-circle"></i>
                                </div>
                                <h3>Create Pages</h3>
                                <p>
                                    Design beautiful website, landing page or funnel with our
                                    page editor.
                                </p>
                                <div class="con">
                                    <a href="#" class="text-purp">
                                        <b> Continue <i class="bi bi-arrow-right"></i> </b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="dropover">
                                <div class="for-drop">
                                    <i class="bi bi-2-circle"></i>
                                </div>
                                <h3>Create Shore</h3>
                                <p>Create shops to sell your digital and physical products</p>
                                <div class="con">
                                    <a href="#" class="text-purp">
                                        <b> Continue <i class="bi bi-arrow-right"></i> </b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="dropover">
                                <div class="for-drop">
                                    <i class="bi bi-3-circle"></i>
                                </div>
                                <h3>Create Emails</h3>
                                <p>
                                    Create emails easily with our drag and drop editors readily
                                    avaliable for you
                                </p>
                                <div class="con">
                                    <a href="#" class="text-purp">
                                        <b> Continue <i class="bi bi-arrow-right"></i> </b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="dropover">
                                <div class="for-drop">
                                    <i class="bi bi-4-circle"></i>
                                </div>
                                <h3>Create Automations</h3>
                                <p>
                                    Automate sms, chats and emails to reach subscribers at the
                                    perfect time.
                                </p>
                                <div class="con">
                                    <a href="#" class="text-purp">
                                        <b> Continue <i class="bi bi-arrow-right"></i> </b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
    <!-- JAVASCRIPT -->
    <script src="{{URL::asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{URL::asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Datatable bootstrap JS -->

    <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>

    <!-- dashboard init -->

    <!-- App js -->
    <script src="{{URL::asset('admin/assets/js/app.js')}}"></script>
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
    <!-- bootstrap datepicker -->
<script src="{{URL::asset('admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>


<!--tinymce js-->
<script src="{{URL::asset('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- form repeater js -->
<script src="{{URL::asset('admin/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

<script src="{{URL::asset('admin/assets/js/pages/task-create.init.js')}}"></script>
</body>

</html>
