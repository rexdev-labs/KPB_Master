<?php
    include "header.php";
?>
<div class="content-wrapper">

<!-- Contact form -->


<div class="container-fluid">

    <div class="row bg-boxed-black medium-padding120">

        <div class="container">
            <div>
                <form class="contact-form" method="post" action="send_mail.php">
                    <div class="col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 style="color:white;">Daftar Member</h1>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="contact_website" class="input-title">Email</label>
                                    <input class="email focus-white input-standard-grey input-dark" id="contact_website"  name="permalink" required placeholder="" type="email">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="contact_name" class="input-title">Nama</label>
                                    <input class="email focus-white input-standard-grey input-dark" id="contact_name" required name="name" placeholder="" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="contact_name" class="input-title">Password</label>
                                    <input class="email focus-white input-standard-grey input-dark" id="contact_name" required name="name" placeholder="" type="password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="contact_phone" class="input-title">No Hp</label>
                                <input class="email focus-white input-standard-grey input-dark" id="contact_phone" name="phone" placeholder="" type="number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="contact_details" class="input-title">Alasan Mau Bergabung</label>
                                <textarea class="email focus-white input-standard-grey input-dark" id="contact_details"  name="message" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="submit-block table">
                                <div class="col-lg-5 table-cell">
                                    <button class="btn btn-medium btn--green btn-hover-shadow">
                                        <span class="text">Daftar Jadi Member</span>
                                        <span class="semicircle"></span>
                                    </button>
                                    <span class="font-kecil">Tunggu admin menyetujui permintaanmu, kamu akan di hubungi admin </span>
                                </div>
                                <div class="col-lg-7 table-cell">
                                    <div class="submit-block-text">
                                        Dengan Klik Daftar Kamu setuju Untuk Bergabung di Komunitas Programmer Banyuwangi, dan mengikuti 
                                        aturan2 yang ada di komunitas.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Contact form -->

<!-- Clients -->


<!-- End Clients -->

<?php
    include "footer.php";
?>