@extends('layouts.app')
@section('title', 'Faza Intan | Data Contacts')
@section('content')
<!--MAIN CONTENT-->
<head>
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Contact Us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">

                                <!--DATA TABEL-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Pesan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $index => $contact)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $p->Nama }}</td>
                                            <td>{{ $p->Email }}</td>
                                            <td>{{ $p->Pesan }}</td>
                                            <td>
                                                <a href="/edit_contact/{{ $p->id }}">
                                                    <button class="item" data-placement="top" title=""
                                                        data-original-title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="/delete_contact/{{ $p->id }}">
                                                    <button class="item ml-3" data-placement="top" title=""
                                                        data-original-title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                @endforeach
                            </table>
            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection