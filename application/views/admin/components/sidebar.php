<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu" style="background: -webkit-linear-gradient(left, #571ee0, #4ad6da);
    background: -o-linear-gradient(left,  #571ee0, #4ad6da);
    background: -moz-linear-gradient(left,  #571ee0, #4ad6da);
    background: linear-gradient(left,  #571ee0, #4ad6da);">
            <div class="nav">
                <div class="sb-sidenav-menu-heading" style="color: #fff;">Menu</div>
                <a class="nav-link" href="<?=base_url();?>Dashboard/dashboard_admin" style="color: #fff;">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color: #fff;"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="<?=base_url();?>Pegawai/view_admin" style="color: #fff;">
                    <div class="sb-nav-link-icon"><i class="fas fa-users" style="color: #fff;"></i></div>
                    Data Karyawan
                </a>
                <a class="nav-link" href="<?=base_url();?>Pegawai/view_admin_rooster" style="color: #fff;">
                    <div class="sb-nav-link-icon"><i class="fas fa-users" style="color: #fff;"></i></div>
                    Rooster
                </a>
                <a class="nav-link" href="<?=base_url();?>Jam_Kerja/view_admin" style="color: #fff;">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-clock" style="color: #fff;"></i>
                    </div>
                    Jam Kerja
                </a>
                <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns" style="color: #fff;"></i></div>
                    Laporan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" style="color: #fff;" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?=base_url();?>Cuti/view_admin" style="color: #fff;">Rooster</a>
                        <a class="nav-link" href="<?=base_url();?>Notifikasi/view_admin" style="color: #fff;"> Jam
                            Kerja</a>
                    </nav>
                </div>
                <a class="nav-link" href="<?=base_url();?>Settings/view_admin" style="color: #fff;">
                    <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list" style="color: #fff;"></i></div>
                    Settings
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>