<li class="menu-header">Main Menu</li>
<li><a class="nav-link" href="<?= site_url() ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
<li><a class="nav-link" href="<?= site_url('gawe') ?>"><i class="fas fa-box"></i> <span>Gawe atau Acara</span></a></li>
<li class="nav-item dropdown">
<a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Kontak</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= site_url('groups') ?>">Grup Kontak</a></li>
        <li><a class="nav-link" href="#">Kontak Saya</a></li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Undangan</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="#">Saya Mengundang</a></li>
        <li><a class="nav-link" href="#">Saya Diundang</a></li>
    </ul>
</li>