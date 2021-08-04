<!-- pricing -->
<section class="p-5 ">
    <div class="container">
        <div class="col-12 px-0 mb-5">
            <p class=" text-center hero-title-medium mb-0 font-weight-bold">Paket Hosting Singapura yang Tepat</p>
            <p class=" text-center hero-subtitle-small font-weight-bold">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
        </div>
        <div class="row my-5">
            <div class="col-12 col-md-6 col-xl-3 mb-3">
                <div class="card wauto" style="width:17.8rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h2 class="primarytext font-weight-bold text-center"><?= $price[0]["nama"] ?></h2>
                        </li>
                        <li class="list-group-item">
                            <div class="primarytext text-center"><del>Rp.<?= $price[0]["harga"] ?></del></div>
                            <div class="text-center">
                                <span style="vertical-align:top;position: relative;
                              top: 15px;" class="regular-text">Rp</span>
                                <span style="font-size: 54px;" class="primarytext font-weight-bold"><?= substr($price[0]["promo"], 0, 2) ?></span>
                                <span style="vertical-align:cnter;vertical-align: top;
                              position: relative;
                              top: 25px;"><span class="primarytext font-weight-bold"><?= substr($price[0]["promo"], 3, 6) ?></span class="regular-text">/ bln</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="text-center">938 Pengguna terdaftar</div>
                        </li>
                        <li class="list-group-item text-center">
                            <p class="defaulttext-bold">0.5X RESOURCE POWER</p>
                            <p><b>500 MB</b> Disk Space</p>
                            <p><b>Unlimited</b> Bandwidth</p>
                            <p><b>Unlimited</b> Databases</p>
                            <p><b>1</b> Domain</p>
                            <p><b>Instant</b> Backup</p>
                            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                            <div class="col text-center primarytext mt-5">
                                <button type="button" class="btn border-3 btn-outline-dark font-weight-bold btn-pill my-3 br">Pilih Sekarang</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-3">
                <div class="card wauto" style="width:17.8rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h2 class="primarytext font-weight-bold text-center"><?= $price[1]["nama"] ?></h2>
                        </li>
                        <li class="list-group-item">
                            <div class="primarytext text-center"><del>Rp.<?= $price[1]["harga"] ?></del></div>
                            <div class="text-center">
                                <span style="vertical-align:top;position: relative;
                            top: 15px;" class="regular-text">Rp</span>
                                <span style="font-size: 54px;" class="primarytext font-weight-bold"><?= substr($price[1]["promo"], 0, 2) ?></span>
                                <span style="vertical-align:cnter;vertical-align: top;
                            position: relative;
                            top: 25px;"><span class="primarytext font-weight-bold"><?= substr($price[1]["promo"], 3, 6) ?></span class="regular-text">/ bln</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="text-center">4.168 Pengguna Terdaftar</div>
                        </li>
                        <li class="list-group-item text-center">
                            <p><b>1X RESOURCE POWER</b></p>
                            <p><b>Unlimited</b> Disk Space</p>
                            <p><b>Unlimited</b> Bandwidth</p>
                            <p><b>Unlimited</b> POP3 Email</p>
                            <p><b>Unlimited</b> Databases</p>
                            <p><b>10</b> Addon Domains</p>
                            <p><b>Instant</b> Backup</p>
                            <p><b>Domain</b> Gratis Selamanya</p>
                            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                            <div class="col text-center primarytext mt-5">
                                <button type="button" class="btn border-3 btn-outline-dark font-weight-bold btn-pill my-3 br">Pilih Sekarang</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-3">
                <div class="card bblue wauto" style="width:17.8rem;border: 1px #157af6 solid;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-primary bnone ">
                            <h2 class="primarytext font-weight-bold text-center"><?= $price[2]["nama"] ?></h2>
                            <img src="<?= base_url() ?>Assets/svg/bestseller.svg" alt="" srcset="" class="sticky">
                        </li>
                        <li class="list-group-item text-white bg-primary">
                            <div class="primarytext text-center"><del>Rp.<?= $price[2]["harga"] ?></del></div>
                            <div class="text-center">
                                <span style="vertical-align:top;position: relative;
                                top: 15px;" class="regular-text">Rp</span>
                                <span style="font-size:54px;" class="primarytext font-weight-bold"><?= substr($price[2]["promo"], 0, 2) ?></span>
                                <span style="vertical-align:cnter;vertical-align: top;
                                position: relative;
                                top: 25px;"><span class="primarytext font-weight-bold"><?= substr($price[2]["promo"], 3, 6) ?> </span class="regular-text">/ bln</span>
                            </div>
                        </li>
                        <li class="list-group-item text-white background-secondary ">
                            <div class="text-center  text-white">10.017 Pengguna terdaftar</div>
                        </li>
                        <li class="list-group-item text-center">
                            <p>2X RESOURCE POWER</p>
                            <p><b>Unlimited</b> Disk Space</p>
                            <p><b>Unlimited</b> Bandwidth</p>
                            <p><b>Unlimited</b> POP3 Email</p>
                            <p><b>Unlimited</b> Databases</p>
                            <p><b>Unlimited</b> Addon Domains</p>
                            <p><b>Instant</b> Backup</p>
                            <p><b>Domain</b> Gratis Selamanya</p>
                            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                            <p><b>Private</b> Name Server</p>
                            <p><b>SpamAssasin</b> Mail Protection</p>
                            <div class="col text-center primarytext mt-5">
                                <button type="button" class=" btn btn-primary font-weight-bold btn-pill my-3 br">Pilih Sekarang</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-3">
                <div class="card wauto" style="width:17.8rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h2 class="primarytext font-weight-bold text-center"><?= $price[3]["nama"] ?></h2>
                        </li>
                        <li class="list-group-item">
                            <div class="primarytext text-center"><del>Rp.<?= $price[3]["harga"] ?></del></div>
                            <div class="text-center">
                                <span style="vertical-align:top;position: relative;
                              top: 15px;" class="regular-text">Rp</span>
                                <span style="font-size: 54px;" class="primarytext font-weight-bold"><?= substr($price[3]["promo"], 0, 2) ?></span>
                                <span style="vertical-align:cnter;vertical-align: top;
                              position: relative;
                              top: 25px;"><span class="primarytext font-weight-bold"><?= substr($price[2]["promo"], 3, 6) ?> </span class="regular-text">/ bln</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="text-center">3.552 Pengguna Terdaftar</div>
                        </li>
                        <li class="list-group-item text-center">
                            <p>3X RESOURCE POWER</p>
                            <p><b>Unlimited</b> Disk Space</p>
                            <p><b>Unlimited</b> Bandwidth</p>
                            <p><b>Unlimited</b> POP3 Email</p>
                            <p><b>Unlimited</b> Databases</p>
                            <p><b>Unlimited</b> Addon Domains</p>
                            <p><b>Magic Auto</b> Backup & Restore</p>
                            <p><b>Domain</b> Gratis Selamanya</p>
                            <p><b>Unlimited SSL</b> Gratis Selamanya</p>
                            <p><b>Private</b> Name Server</p>
                            <p><b>Prioritas</b> Layanan Support</p>
                            <p>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </p>
                            <p><b>SpamExpert</b> Pro Mail Protection</p>
                            <div class="col text-center primarytext mt-5">
                                <button type="button" class="btn border-3 btn-outline-dark font-weight-bold btn-pill my-3 br">Diskon 40%</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section>
<!-- pricing -->