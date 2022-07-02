<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?=base_url();?>Dashboard/dashboard_pegawai">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link"
                    href="<?=base_url();?>Jam_Kerja/view_pegawai/<?=$this->session->userdata('id_user');?>">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-clock"></i></div>
                    Jam Kerja
                </a>
                <a class="nav-link" href="<?=base_url();?>Cuti/view_pegawai/<?=$this->session->userdata('id_user');?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Rooster
                </a>
                <a class="nav-link" href="<?=base_url();?>Notifikasi/view_pegawai/<?=$this->session->userdata('id_user');?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                    Riwayat Jam Kerja
                </a>
                <a class="nav-link" href="<?=base_url();?>Lengkapi_Data/view_pegawai">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Lengkapi Data
                </a>
                <a class="nav-link" href="<?=base_url();?>Settings/view_pegawai">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Settings
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?=$this->session->userdata('username');?>
        </div>
    </nav>
</div>