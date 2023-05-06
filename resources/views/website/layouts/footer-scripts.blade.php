<script src="{{asset('website/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('website/js/popper.min.js')}}"></script>
<script src="{{asset('website/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('website/js/sweetalert.min.js')}}"></script>
<script src="{{asset('website/js/kit.fontawesome.com/cbef0f2c90.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('website/js/jsuites.net/v4/jsuites.js')}}"></script>
<script src="{{asset('website/js/aos.js')}}"></script>
<script src="{{asset('website/js/bootstrap.js')}}"></script>
<script src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js">
</script>
<script src="https://jsuites.net/v4/jsuites.js"></script>
<script src="{{asset('website/js/autoTyping.js')}}"></script>

<script src="{{asset('website/js/app.js')}}"></script>




<script>
    $(document).ready(function () {

        $(".loder").fadeOut(3000, function () {
            $("body").css({
                overflow: `auto`
            })
        })

    })
    // !لإحداث تغيير ؟!", " لإمتلاك مشروعك ؟!" ," لتحقيق حلمك ؟!", " لتبدء قصتك ؟"
    const exampleText = ['لإحداث تغيير ؟!', 'لإمتلاك مشروعك ؟!', ' لتحقيق حلمك ؟!', 'لتبدء قصتك  ؟!'];
    const exampleTyping = new AutoTyping('.example-selector', exampleText, {
        typeSpeed: 50,
        deleteSpeed: 50,
        waitBeforeDelete: 2000,
        waitBetweenWords: 500,
    });
    exampleTyping.start()
</script>
