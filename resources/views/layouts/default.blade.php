<!DOCTYPE html>
<html lang="en">
    <head>
         @include('includes.head')
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            @include('includes.top')
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            @include('includes.nav')
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            @include('includes.bottombar')
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            @include('includes.header')
        </div>
        <!-- Main Slider End -->      
        
             
        
             
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+012-345-6789</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            @yield('content')
        </div>
        <!-- Featured Product End -->       
        
              
        
        
        
        
        <!-- Footer Start -->
        <div class="footer">
            @include('includes.footer')
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            @include('includes.footerbottom')
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript assets/lib/raries -->
        @include('includes.scripts')
    </body>
</html>
