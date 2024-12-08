
    <!-- Default CSS -->
    <link rel="stylesheet" href="https://imba96.bet/account/assets/css/font/font-style.css">
    <link rel="stylesheet" href="system/css/style.css">

</head>
<body class="mgMenuBottom">

    <span class="bglight"></span>

    <!-- HEADER -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="header">
  

                        </span>


                        </a>
                        <div class="grad_color01 listLanguage">
                            <a href="#" data-lang="th" data-icon="https://imba96.bet/account/assets/images/icon-th.svg">
                                <img src="https://imba96.bet/account/assets/images/icon-th.svg" alt="">
                                <span>ภาษาไทย</span>
                            </a>
                            <a href="#" data-lang="en" data-icon="https://imba96.bet/account/assets/images/icon-en.svg">
                                <img src="https://imba96.bet/account/assets/images/icon-en.svg" alt="">
                                <span>English</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    


<div class="container" data-aos="fade-up">

    <div class="row justify-content-center">
        <div class="col-md-6">


                </a>
            </div>

            <div class="titlePage">

                <h3>ถอนเงิน</h3>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">


            <div class="cardBlock">
                <img src="https://imba96.bet/account/assets/images/icon-withdraw-page.svg" alt="" class="imgPage">


                <div class="blockCredit">
                    <p class="mb-2 color-secondary">ยอดเงินที่สามารถถอนได้ 0 บาท</p>
                    <h3 class="font-bold current_balance"></h3>

                    <a onclick="refresh_balance()" class="refresh-credit abs" style="cursor:pointer;">
                        <i class="fa-light fa-arrows-rotate"></i>
                    </a>
                </div>

                <div class="formInput">
                    <input type="number" id="number" class="form-control form-control-lg text-center" placeholder="ระบุจำนวนเงินที่ต้องการถอน">
                    <a onclick="withdraw()" id="btn-withdraw" class="btn btn-danger d-block mt-3 btn-danger3">แจ้งถอนเงิน</a>
                </div>

                <a href="/?page=connect" class="btn btn-outline-light d-block mt-3">ประวัติรายการฝาก ถอน</a>
                
            </div>


            <div class="mt-4 mb-4 cardColorDark">
                <p>ขั้นตอนการถอนเงิน</p>
                <ul>
                    <li>ถอนขั้นต่ำ 100 บาท</li>
                    <li>กดปุ่ม "แจ้งถอน"</li>
                    <li>รอเงินเข้าบัญชีธนาคารที่สมัครไว้กับทางเว็บ</li>
                </ul>
                <small class="text-muted">*หากเงินไม่เข้าเกินกว่า 15 นาทีให้ติดต่อแอดมิน</small>
                <a href="?page=home" class="btn-flat btn-flat-block">
                    <img src="https://imba96.bet/account/assets/images/menu-icon-05.svg" alt="">
                    <span>ติดต่อแอดมิน</span>
                </a>
            </div>

        </div>
    </div>
</div>

<link href="https://imba96.bet/account//assets/framework/toastify/toastify.min.css" rel="stylesheet">
<script src="https://imba96.bet/account/assets/js/jquery-3.7.1.min.js"></script>
<script src="https://imba96.bet/account//assets/framework/toastify/toastify.min.js"></script>

<script>
    const convertNumberFormat = (v) => {
        if(v == null) {
            return 0
        }
        let number = parseFloat(v)
        let formatted = number.toLocaleString('th-Th', {maximumFractionDigits: 2})
        return formatted
    }
    var isClick = false;
    const withdraw = () => {
        if(isClick) {
            return false;
        }
        var number = $("#number").val();
        var csrfHash = $(`input[name="csrf_token"]`).val();
        if(number.trim() == ""){
            $("#number").focus();
            $(".noti").html('<div class="alert alert-danger" role="alert" style="text-align:center;">กรุณากรอกจำนวนเงิน</div>');
        }
        else{
            isClick = true
            $("#btn-withdraw").attr("disabled", true);
            $("#btn-withdraw").html("<i class='fa fa-spinner fa-spin'></i>");
            $("#btn-withdraw").css("opacity","0.6");
            $.ajax({
                    url: "https://imba96.bet/account/withdraw",
                    data: { number:number, csrf_token:csrfHash },
                    method: "POST",
                    dataType: 'json',
            }).done(function(res) {
                if(res.status == 200) {
                    $("#btn-withdraw").attr("disabled", false);
                    $("#btn-withdraw").text("แจ้งถอนเงิน");
                    $("#number").val(""); 
                    Toastify({
                        text: "แจ้งถอนสำเร็จ",
                        duration: 3000,
                        newWindow: false,
                        gravity: "top",
                        position: "center",
                        style: {
                            background: "#14A44D",
                        }
                    }).showToast();
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                } else {
                    if(!res.csrf) {
                        location.reload();
                    }
                    $("#btn-withdraw").attr("disabled", false);
                    $("#btn-withdraw").text("แจ้งถอนเงิน");
                    $(`input[name="csrf_token"]`).val(res.csrf);
                    Toastify({
                        text: res.message,
                        duration: 3000,
                        newWindow: false,
                        gravity: "top",
                        position: "center",
                        escapeMarkup: false,
                        style: {
                            background: "#FF3333",
                        }
                    }).showToast();
                    isClick = false;
                    $("#btn-withdraw").css("opacity","1");
                }
            }).fail(function(err) {
                Toastify({
                    text: 'กรุณาทำรายการถอนใหม่อีกครั้ง',
                    duration: 3000,
                    newWindow: false,
                    gravity: "top",
                    position: "center",
                    style: {
                        background: "#FF3333",
                    }
                }).showToast();
                setTimeout(() => {
                    location.reload();
                }, 3000);
            })
        }
    }
</script>

    <div class="footer color-secondary">
        
    </div>

    <!-- MENU FOOTER -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 fixedMenu">

                <div class="bottomMenu">
                    <ul class="menuListNavBottom">
                        <li>

                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>




    <!-- Bootstrap Framework -->
    <script src="https://imba96.bet/account/assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://imba96.bet/account/assets/js/popper.min.js"></script>

    <!-- Framework JS -->
    <script src="https://imba96.bet/account/assets/framework/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="https://imba96.bet/account/assets/framework/aos-master/aos.js"></script>
    <script src="https://imba96.bet/account/assets/framework/fontawesome/js/all.min.js"></script>

    <!-- Default JS -->
    <script src="https://imba96.bet/account/assets/js/apps.js"></script>
    <script>
        $(document).ready(function(){
            $('.language').click(function(e){
                e.preventDefault();
                $(this).next('.listLanguage').next('.listLanguage').toggleClass('show');
            });

            $('.listLanguage a').click(function(e){
                e.preventDefault();
                var selectedIcon = $(this).data('icon');
                var selectedLang = $(this).data('lang');
                let path = window.location.pathname;
                $('.language img').attr('src', selectedIcon);
                $('.listLanguage').removeClass('show');
                window.location.replace(`https://imba96.bet/account/lang/${selectedLang}?path=${path}`);
            });

            $(document).click(function(e) {
                if (!$(e.target).closest('.language, .listLanguage').length) {
                    $('.listLanguage').removeClass('show');
                }
            });
        });

        var isReloadBalance = false;
        const refresh_balance = () => {  
            if(isReloadBalance) {
                return true;
            }
            isReloadBalance = true;
            $(".current_balance").html("<i class='fa fa-spinner fa-spin'></i>");
            $(".current_point").html("<i class='fa fa-spinner fa-spin'></i>");         
            $.ajax({
                url: "",
                type: "POST",
                dataType: 'json',
            }).done(function(res) {
                $(".current_balance").html(Number(res.balance).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                $(".current_point").html(Number(res.point).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                setTimeout(() => {
                    isReloadBalance = false;
                }, 6000);
            })      
        }  
        refresh_balance();  

        const checkSession = () => {            
            $.ajax({
                url: "",
                type: "POST",
                dataType: 'json',
            }).done(function(res) {
                if(res.check == 0){
                    location.href = "/account/users/logout";
                }
            })      
        }       
        setInterval(() => {
            checkSession()
        }, 10000);
    </script>

</body>

</html>