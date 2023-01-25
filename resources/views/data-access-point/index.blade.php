@extends('master')
@section('konten')
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
                        <th scope="col">Merk AP</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Nama AP</th>
                        <th scope="col">Letak</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">AKSI</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($ap as $post)
                        <tr>
                            <td>1</td>
                            <td>{{ $post->merk_server }}</td>
                            <td>{{ $post->jenis }}</td>
                            <td>{{ $post->hardisk }}</td>
                            <td>{{ $post->ram }}</td>
                            <td>{{ $post->processor }}</td>
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
                            Data Belum Tersedia.
                        </div>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('js')
    <script>
        function get_data() {

            // JavaScript untuk ambil data buat Edit Data
            $.ajax({
                url: "http://tugas-hasan.test/getServer",
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    for (const iterator of res) {
                        $('#id').val(`${iterator.id}`)
                    }
                }
            });

        }
    </script>
    @endpush
    {{-- @include('data-access-point.insert') --}}
    {{-- @include('data-access-point.edit') --}}
@endsection