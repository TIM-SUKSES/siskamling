  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/tux.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama_pengguna'); ?></p> <!-- Nama diambil dari database -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Admin</li>
        <li class="<?php echo $this->uri->segment(2) == 'DataPetugas' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/DataPetugas'); ?>">
            <i class="fa fa-user"></i> <span>Data Petugas</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'MasukPetugas' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/MasukPetugas'); ?>">
            <i class="fa fa-id-card"></i> <span>Absen Masuk Petugas</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'IzinPetugas' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/IzinPetugas'); ?>">
            <i class="fa fa-credit-card"></i> <span>Absen Izin Petugas</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'JadwalPetugas' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/JadwalPetugas'); ?>">
          <i class="fa fa-calendar"></i> <span>Jadwal Petugas</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'DataWarga' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/DataWarga'); ?>">
            <i class="fa fa-group"></i> <span>Data Warga</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'LaporanWarga' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/LaporanWarga'); ?>">
            <i class="fa fa-envelope-open"></i> <span>Laporan Warga</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'logout' ? 'active' : '' ?> ">
          <a href="<?php echo base_url('auth/logout'); ?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">