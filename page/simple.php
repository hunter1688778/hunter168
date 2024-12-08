
<style>
    .shops {
        padding: 20px;
        border-radius: 1vh;
    }

    .shops-body {
        position: relative;
        color: #fff;
        font-weight: 600;
        height: 100%;
    }

    .shops-body>.shops-img {
        width: 100%;
        height: 100%;
        border-radius: 1vh;
        transition: all .5s ease;
    }

    .shops-body>.shops-img:hover {
        transform: scale(1.035);
    }

    .shops-body>.shops-text-center {
        position: absolute;
        top: 80%;
        left: 20%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .5s ease;
    }

    .shops-body:hover>.shops-text-center {
        left: 50%;
        opacity: 1;
        font-size: 30px;
        padding: 0 20px;
        border-radius: 2vh;
        background-color: var(--main);
    }
</style>

<div class="container-fluid  mt-4 p-0 " data-aos="fade-down">
        <div class="container p-4 pt-0 pb-0 m-cent">
            <div id="carouselExampleControls" class="carousel slide border-spe" data-bs-ride="carousel" style="border-radius: 1vh;">
                <div class="carousel-inner" style="border-radius: 1vh;">
                    <?php
                    $active = false;
                    $find = dd_q("SELECT * FROM carousel");
                    while ($row = $find->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <div class="carousel-item <?php if (!$active) {
                                                        echo "active";
                                                        $active = true;
                                                    } ?>">
                            <img src="<?php echo $row['link'] ?>" class="d-block w-100" alt="..." style="border-radius: 1vh;">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
          
   
                </div>
            </div>
        </div>
		</div>
	
        </div>
    

<div class="container mt-3 p-0 " data-aos="fade-down">
    <div class="container-sm ps-4 pe-4">
        <div class="w-100 bg-white shadow-sw ps-3 pe-4 align-contant-center" style="border-radius: 50px;">
            <div class="row">

                    <div class="p-2" style="background-color: var(--main); border-radius: 50px; font-weight: 600; font-size: 20px;">
                        <p class="text-center m-0"><img src="https://cdn-icons-png.flaticon.com/512/8306/8306906.png" width="25"> &nbsp;ประกาศ</p>
                    </div>
                </div>
                <div class="col p-2 mt-lg-4 text-main">
                    <marquee><?= $config['ann'] ?></marquee>
                </div>
            </div> 
	

        </div>
        <div class="row">
    <div class="col-sm-3 mt-2">
        <div class="card" style="background-color: black; color: white;">
            <div class="card-body">
                <div class="text-center aos-init aos-animate">
                    <a href="?page=shop" style="text-decoration: none; color: white;" data-aos="zoom-in" data-aos-duration="1000" class="aos-init aos-animate">
                        <div class="align-self-center pt-3 pb-1 ">
                            <center>
                                <img src="/assets/img/gamepad.png" style="height: 3rem;">
                                <h4 class="mt-2">&nbsp;ทางเข้าเล่น</h4>
                            </center>
                        </div>
                    </a>
</div>
</div>
</div>
</div>
<div class="col-sm-3 mt-2">
<div class="card" style="background-color: black; color: white;">
<div class="card-body">
<div class="text-center aos-init aos-animate">
<a href="?page=payment" style="text-decoration: none;" data-aos="zoom-in" data-aos-duration="1000" class="aos-init aos-animate">
                            <div class="align-self-center pt-3 pb-1 ">
                                <center>
                                    <img src="/assets/icon/credit.png" style="height: 3rem;">
                                    <h4 class="text-white mt-2">&nbsp;เติมเงิน</h4>
                                </center>
                            </div>
                        </a>
</div>
</div>
</div>
</div>
<div class="col-sm-3 mt-2">
<div class="card" style="background-color: black; color: white;">
<div class="card-body">
<div class="text-center aos-init aos-animate">
<a href="?page=redeem" style="text-decoration: none;" data-aos="zoom-in" data-aos-duration="1000" class="aos-init aos-animate">
                            <div class="align-self-center pt-3 pb-1 ">
                                <center>
                                    <img src="/assets/icon/dollar.png" style="height: 3rem;">
                                    <h4 class="text-white mt-2">&nbsp;ถอนเงิน</h4>
                                </center>
                            </div>
                        </a>
</div>
 </div>
</div>
</div>
<div class="col-sm-3 mt-2">
<div class="card" style="background-color: black; color: white;">
<div class="card-body">
<div class="text-center aos-init aos-animate">
<a href="https://lin.ee/Wy5SyDu" style="text-decoration: none;" data-aos="zoom-in" data-aos-duration="1000" class="aos-init aos-animate">
                            <div class="align-self-center pt-3 pb-1 ">
                                <center>
                                    <img src="/assets/icon/call-center.png" style="height: 3rem;">
                                    <h4 class="text-white mt-2">&nbsp;ติดต่อ</h4>
                                </center>
                            </div>
                        </a>

</div>
</div>
</div>
</div>
</div>
<br>
			
     <!-- <div class="container-sm p-4" data-aos="fade-down">
        <!-- <div class="row justiy-content-center  justify-content-lg-between">
            <div class="col-lg-12"> -->
      <!-- <div class="container-fluid bg-white shadow-sm p-3  " style="border-radius: 1hv;">
            <div class="d-flex justify-content-between">
                <span class="h4 text-main "> <img src="assets/icon/application.png" class="m-0 mb-2" style="height: 2.5rem;">&nbsp;<b>หมวดสำหลับคุณ</b></span>
                <a href="?page=shop" class="btn mb-2 bg-main-gra align-self-center ps-4 pe-4 pt-2 pb-2 d-none d-lg-block" style="border-radius: 50px;">
                    <h4 class="text-white m-0">เลือกซื้อเพิ่มเติม</h4> -->
           <!--     </a>
            </div>
            <hr class="mt-1"> 
            <style>
                .cc {
                    width: 100%;
                    max-width: 250px;
                }

                @media only screen and (max-width: 100px) {
                    .cc {
                        width: 100%;
                        max-width: 100vh;
                    }
                } -->
            </style>
            <div class="row justify-content-center justify-content-lg-start">
                <?php
                // $check = dd_q("SELECT * FROM crecom WHERE recom_1 != 0 AND recom_2 != 0 AND recom_3 != 0 AND recom_4 != 0"); #44444
                $check = dd_q("SELECT * FROM crecom WHERE recom_1 != 0 AND recom_2 != 0");
                if ($check->rowCount() == 1) {
                    $data = $check->fetch(PDO::FETCH_ASSOC);
                    for ($i = 1; $i <= 2; $i++) {
                        $recom = "recom_" . $i;
                        $find = dd_q("SELECT * FROM category WHERE c_id = ? ", [$data[$recom]]);
                        $row = $find->fetch(PDO::FETCH_ASSOC);
                ?>

                     <!--      <a href="?page=shop&category=<?= $row['c_name'] ?>">
                                <div class="shops-body w-100">
                                    <img class="shops-img" src="<?= htmlspecialchars($row['img']) ?>">
                                    <div class="shops-text-center">
                                        <?= htmlspecialchars($row['des']) ?> -->
                                    </div> 
                                </div>
                            </a>
                        </div> 
                    <?php
                    }
                } else {
                    ?>
                <?php
                    $find = dd_q("SELECT * FROM category ORDER BY RAND() LIMIT 4");
                    while ($row = $find->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                     <!--   <div class="col-12 col-lg-6 mb-3">
                            <a href="?page=shop&category=<?= $row['c_name'] ?>">
                                <div class="shops-body w-100">
                                    <img class="shops-img" src="<?= htmlspecialchars($row['img']) ?>">
                                  <div class="shops-text-center">
                                        <?= htmlspecialchars($row['des']) ?> -->
                                    </div> 
                                </div>
                            </a>
                        </div> 
                <?php }
                } ?>
            </div>
            
        </div>
    </div>

 


				 

                



            </style>
            <div class="row justify-content-center justify-content-lg-start">
                <?php
                $check = dd_q("SELECT * FROM recom WHERE recom_1 != 0 AND recom_2 != 0 AND recom_3 != 0 AND recom_4 != 0 AND recom_5 != 0 AND recom_6 != 0 AND recom_7 != 0 AND recom_8 != 0 AND recom_9 != 0 AND recom_10 != 0");
                if ($check->rowCount() == 1) {
                    $data = $check->fetch(PDO::FETCH_ASSOC);
                    for ($i = 1; $i <= 5; $i++) {
                        $recom = "recom_" . $i;
                        $find = dd_q("SELECT * FROM box_product WHERE id = ? ", [$data[$recom]]);
                        $row = $find->fetch(PDO::FETCH_ASSOC);
                        $stock = dd_q("SELECT * FROM box_stock WHERE p_id = ? ", [$row["id"]]);
                        $count = $stock->rowCount();
                        if ($count  == NULL) {
                            $count = 0;
                        }
                ?>

                                                

                         

                    <?php
                    }
                } else {
                    ?>
        
      
                <?php
                }
                ?>
            </div>


            </a>
        </div>
    </div>
    <!-- </div>
</div> -->


        <?php





        
        ?>
		 <div 
    <div class="card-body">

        <hr>	

                </div>


                        <center>



                        </center>
                    </div>
<?php
					  $q_3 = dd_q("SELECT sum(amount) AS total FROM topup_his ");
    $topup = $q_3->fetch(PDO::FETCH_ASSOC);
    if($topup["total2"] == null){
        $topup["total2"] = "0.00";
    }
					 ?>
				
            </div>
        </div>
    </div>

    <script src="system/js/countup.js"></script>
</div>
</div>
</div>
</div><!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-2">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color: red;">
        <!-- <br> © 2020 Copyright: Matching <br> -->
        © 2024 Copyright By HUNTER168
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
