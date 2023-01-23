<!-- Head -->
@include('partial.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partial.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partial.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambahModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Merk Server</th>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">HDD</th>
                                        <th scope="col">RAM</th>
                                        <th scope="col">Processor</th>
                                        <th scope="col">OS</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Penggunaan</th>
                                        <th scope="col">AKSI</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @forelse ($server as $post)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $post->merk_server }}</td>
                                            <td>{{ $post->jenis }}</td>
                                            <td>{{ $post->hardisk }}</td>
                                            <td>{{ $post->ram }}</td>
                                            <td>{{ $post->processor }}</td>
                                            <td>{{ $post->os }}</td>
                                            <td>{{ $post->tahun }}</td>
                                            <td>{{ $post->penggunaan }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data-server.destroy', $post->id) }}" method="POST">
                                                    <a href="{{ route('data-server.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                      @empty
                                          <div class="alert alert-danger">
                                              Data Post belum Tersedia.
                                          </div>
                                      @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('partial.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    @include('data-server.insert')
    <!-- Script -->
    @include('partial.script')

</body>

</html>
