<!DOCTYPE html>
<html>

@include('layout.components.header')
<style>
    .input-preview-label {
        text-align: center;
        line-height: 200px;
        width: 200px;
        height: 200px;
        border: 2px dashed #ddd;
        border-radius: 3px;
        position: relative;
        overflow: hidden;
        background-color: #ffffff;
        color: lightgrey;
        background-size: cover;
        background-position: center center;
    }

    .input-preview-label:hover,
    .input-preview-label.is-dragover {
        border-color: #0275d8;
        color: #0275d8;
        cursor: pointer;
        filter: brightness(90%);
    }

    #theme-selection img {
        object-fit: cover;
        height: 150px;
        width: 300px;
        object-position: bottom;
        cursor: pointer;
    }
</style>

<body>
    <!-- Main content -->
    <div class="main-content">
        <!-- Topnav -->
        @include('layout.components.topnav-dashboard-alt')
        <!-- End Topnav -->

        <!-- Page content -->
        <div class="container-fluid mt-5">
            @yield('dashboard-alt-content')
            <!-- Footer -->
            <!-- @include('layout.components.footer') -->
        </div>
    </div>
    <!-- Argon Scripts -->
    @include('layout.components.footerjs')
    <!-- End Argon Scripts -->

</body>

</html>