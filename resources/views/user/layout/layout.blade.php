<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}" >
    <title>Material Pro Admin Template - Bootstrap 4 Admin Template</title>
    @include("user.layout.style")

</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include("user.layout.header")
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include("user.layout.sidebar")
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                @section("content")
 @show
                <!--/ Borders-->
                <!--Clearfix-->
               
                <!--/Clearfix-->
                <!--Close icon-->
                
                <!--/Close icon-->
                <!-- Display property -->
                
                <!--Embeds-->
                
                <!--/Embeds-->
                <!--Flex-->
                
                <!--/Flex-->
                <!--Float-->
            
                <!--Image replacement-->
               
                <!--/Image replacement-->
                <!--position-->
               
                <!--/position-->
                <!--Screenreaders-->
                
                <!--/ Screenreaders-->
                <!--Sizing-->
               
                <!--/Sizing-->
                <!-- Spacing -->
               
                <!--/ Spacing -->
                <!--vertical alignment-->
                
                <!--/vertical alignment-->
                <!--Visibility-->
                
                <!--/ visibility-->
            
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include("user.layout.footer")
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== --> 
    @include("user.layout.script")
</body>

<script type="text/javascript">

$(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('/user') }}",
           columns: [

{data: 'DT_RowIndex', name: 'DT_RowIndex'},

{data: 'name', name: 'name'},

{data: 'email', name: 'email'},

{data: 'action', name: 'action', orderable: false, searchable: false},

]
        });
     });

</script>
</html>