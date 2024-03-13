<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/tabel-user.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
/* style.css atau dalam tag <style> di head */

/* Tentukan lebar maksimum untuk sel tabel */
.table-responsive td, .table-responsive th {
    max-width: 150px; /* Sesuaikan lebar maksimum sesuai kebutuhan Anda */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Tentukan lebar maksimum untuk gambar */
.table-responsive img {
    max-width: 100px; /* Sesuaikan lebar maksimum sesuai kebutuhan Anda */
}

</style>
</head>
<body>

@include('layouts.navbar')

<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Tabel <b>Product</b></h2></div>
                    <div class="col-sm-4">
                        <a class="nav-link" href="/createProduct">
                            <button type="button" class="btn add-new d-flex  align-items-center justify-content-center">
                                <i class="fa fa-plus"></i>
                                <span class="text-center">Add New</span>
                            </button>
                        </a>
                    </div>
                    
                </div>
            </div>
            @foreach ($product as $data)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Ukuran</th>
                        <th>Bahan</th>
                        <th>Perawatan</th>
                        <th>Shopee</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data->kode }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->ukuran }}</td>
                        <td>{{ $data->bahan }}</td>
                        <td>{{ $data->perawatan }}</td>
                        <td>{{ $data->shopee }}</td>
                        <td><img src="{{ asset('storage/' . $data->image) }}" alt=""></td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a href="{{ route('updateProduct', ['product' => $data->kode]) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            
                            <!-- Modal Konfirmasi Hapus -->
                            <div class="modal fade" id="deleteConfirmationModal-{{ $data->kode }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <form id="delete-form-{{ $data->kode }}" action="{{ route('admin.deleteProduct', ['product' => $data->kode]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="delete" title="Delete" data-toggle="modal" data-target="#deleteConfirmationModal-{{ $data->kode }}" data-toggle="tooltip">
                                <i class="material-icons">&#xE872;</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            @endforeach
        </div>
    </div>
</div>

</body>
</html>
