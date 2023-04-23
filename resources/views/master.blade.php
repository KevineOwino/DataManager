<!DOCTYPE html>
<html lang="en">

@include("includes.header")

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    
    <div id="toaster"></div>
    


    @yield("auth")

    @include("includes.footer")

</body>

</html>