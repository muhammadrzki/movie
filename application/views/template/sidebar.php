 <!-- Sidebar -->
 <ul class="navbar-nav bg_menu bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
     <div class="sidebar-brand-icon rotate-n-15">
       <i class="fas fa-fw fa-table"></i>
     </div>
     <div class="sidebar-brand-text mx-3">FLIXMO <sup>21</sup></div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider ">
   <!-- Nav Item - Dashboard -->
   <div class="sidebar-heading">
     Administrator
   </div>
   <li class="nav-item">
     <a class="nav-link" href="<?= base_url() ?>film/tambah_film">
       <span>Tambah Film</span></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="<?= base_url() ?>berlangganan/data_pelanggan">
       <span>Data pelanggan</span></a>
   </li>
   <hr class="sidebar-divider mt-3">
   <div class="sidebar-heading">
     Transaksi
   </div>
   <li class="nav-item">
     <a class="nav-link" href="<?= base_url() ?>transaksi/riwayat_transaksi">
       <span>Riwayat Transaksi</span></a>
   </li>
   <div class="sidebar-heading">
     Laporan
   </div>
   <li class="nav-item">
     <a class="nav-link" href="<?= base_url() ?>Laporan/laporan_transaksi">
       <span>Laporan Transaksi</span></a>
   </li>
 </ul>
 <!-- End of Sidebar -->