<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class
                        ="mr-3 fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Barang</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('products.index') }}"> <i class="mr-3 fa fa-archive"></i>Lihat Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('products.create') }}"> <i class="mr-3 fa fa-plus-circle"></i>Tambah Barang</a>
                </li>

                <li class="menu-title">Foto Barang</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('product-galleries.index') }}"> <i class="mr-3 fa fa-image"></i>Lihat Foto Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('product-galleries.create') }}"> <i class="mr-3 fa fa-plus-circle"></i>Tambah Foto Barang</a>
                </li>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('transactions.index') }}"> <i class="mr-3 fa fa-shopping-cart"></i>Lihat Transaksi</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->