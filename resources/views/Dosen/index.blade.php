@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-end"><a href="/dosen/tambah" class="btn btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i> Tambah Data</a></div>

                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIDN</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $dosen as $data)
                                <tr>
                                    <th scope="row">{{$nomor++}}</th>
                                    <td>{{$data->nidn}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm"><i class="fa-solid fa-circle-info"></i></a>
                                        <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="5" scope="row">Data Tidak Ada</th>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
