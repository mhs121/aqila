 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="adsis/img/logo.jpg" alt="User Image" height="50" width="50">
        <div>
          <p class="app-sidebar__user-name text-center"> {{auth::user()->name}} </p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="/admin"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="data2"><i class="icon fa fa-circle-o"></i>Data siswa</a></li>
            <li><a class="treeview-item" href="data3"><i class="icon fa fa-circle-o"></i>Data Orang Tua</a></li>
            <li><a class="treeview-item" href="data4"><i class="icon fa fa-circle-o"></i> DataTutor</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="/daftar"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Data Pendaftar</span></a></li>
        <li><a class="app-menu__item" href="/paketbel"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Paket belajar</span></a></li>
        <li><a class="app-menu__item" href="jadwalb"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">jadwal belajar</span></a></li>
        <li><a class="app-menu__item" href="/kegiatanbelajar"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Kegiatan Belajar</span></a></li>
        <li><a class="app-menu__item" href="{{route('nilai.create')}}"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Nilai Siswa</span></a></li>
        <li><a class="app-menu__item" href="psertifikat"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Sertifikat</span></a></li>
        <li><a class="app-menu__item" href="/tampilrate"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Rating Tutor</span></a></li>
        <li><a class="app-menu__item" href="{{route('payment.create')}}"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Data Pembayaran siswa</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Cetak Report</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="daftaraccount"><i class="icon fa fa-circle-o"></i>Data Pendaftaran</a></li>
            <li><a class="treeview-item" href="datapaket"><i class="icon fa fa-circle-o"></i>Paket Belajar</a></li>
            <li><a class="treeview-item" href="cetakkb"><i class="icon fa fa-circle-o"></i> kegiatan belajar</a></li>
            <li><a class="treeview-item" href="/cn"><i class="icon fa fa-circle-o"></i> Nilai Siswa</a></li>
            <li><a class="treeview-item" href="sert"><i class="icon fa fa-circle-o"></i> Siswa penerima Sertifikat</a></li>
            <li><a class="treeview-item" href="cetakrate"><i class="icon fa fa-circle-o"></i> Rating Tutor</a></li>
            <li><a class="treeview-item" href="/cetakpay"><i class="icon fa fa-circle-o"></i> Data Pembayaran</a></li>
          </ul>
        </li>
      </ul>
    </aside>