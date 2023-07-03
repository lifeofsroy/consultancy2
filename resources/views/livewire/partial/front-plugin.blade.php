<div>
    <style>
        .ph-float {
            position: fixed;
            width: 40px;
            height: 40px;
            bottom: 180px;
            right: 20px;
            text-align: center;
            font-size: 42px;
            z-index: 100;
        }

        .ph-my-float {
            margin-top: 12px;
        }

        .wh-float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 110px;
            right: 14px;
            color: #14ef05;
            text-align: center;
            font-size: 42px;
            z-index: 100;
        }

        .wh-my-float {
            margin-top: 12px;
        }
    </style>

    @if ($plugin->is_ph)
        <a class="ph-float" href="tel:91{{$plugin->ph_no}}" target="_blank">
            <img class="ph-my-float" src="{{ asset('assets/front/images/phone.png') }}" style="width:42px">
        </a>
    @endif

    @if ($plugin->is_wh && !$plugin->is_tw)
        <a class="wh-float" href="https://api.whatsapp.com/send?phone=91{{$plugin->wh_no}}" ."="" target="_blank">
            <img class="wh-my-float" src="{{ asset('assets/front/images/whatsapp.png') }}" style="width:50px">
        </a>
    @endif

    @if ($plugin->is_tw && !$plugin->is_wh)
        <a class="wh-float" href="javascript:void(Tawk_API.toggle())">
            <img class="wh-my-float" src="{{ asset('assets/front/images/chat.png') }}" style="width:50px">
        </a>

        @push('script')
            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API = Tawk_API || {},
                    Tawk_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script"),
                        s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = '{{ $plugin->tw_id }}';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                })();
            </script>
            <!--End of Tawk.to Script-->
        @endpush
    @endif
</div>
