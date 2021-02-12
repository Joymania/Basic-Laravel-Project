<!-- Footer Part -->
<section class="footer_part">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 style="color: white">Contact Us</h4>
                <p style="color: white">Address: {{ $contact->address }}, Mobile: {{ $contact->mobile_no }}, Email: {{ $contact->email }}</p>
            </div>
            <div class="col-md-4">
                <h4 style="color: white">Follow Us</h4>
                <div class="social">
                    <ul>
                        <li><a href="{{ $contact->facebook }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="{{ $contact->twitter }}"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="{{ $contact->youtube }}" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                        <li><a href="{{ $contact->google_plus }}"><i class="fa fa-google-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="color: white;padding: 50px 0px 10px 0px;">
                    Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @ Joymania
                </p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="gotoup">
                <img src="{{ asset('Frontend') }}/image/scrl.jpg" style="width: 40px; height: 40px;">
            </div>
        </div>
    </div>
</div>

<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()>300){
                $('.gotoup').fadeIn();
            }else{
                $('.gotoup').fadeOut();
            }
        });
        $('.gotoup').click(function(){
            $('html,body').animate({scrollTop:0},1000);
        });
    });
</script>
<script src="{{ asset('Frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('Frontend') }}/js/bootstrap.min.js"></script>
</body>
</html>
