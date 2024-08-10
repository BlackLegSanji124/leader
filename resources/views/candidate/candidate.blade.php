@extends('template.main')
@section('title', 'Register leaders')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-right">
                                    <a href="/barang/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add
                                        leader</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-striped table-bordered table-hover text-center"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Candastrador</th>
                                            <th>Nome Completo do apoiador</th>
                                            <th>Apelido</th>
                                            <th>Gendero</th>
                                            <th>Telefone</th>
                                            <th>Data de nascimento</th>
                                            <th>Bairro</th>
                                            <th>Endereco</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidates as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->barangs->name }}</td>
                                                <td>{{ $data->fullname  }}</td>
                                                <td>{{ $data->nickname  }}</td>
                                                @if($data->gender=="0")
                                                    <td>Masculino</td>
                                                @elseif($data->gender=="1")
                                                    <td>Feminino</td>
                                                @else
                                                    <td>Outro</td>
                                                @endif
                                                <td>{{ $data->phone }}</td>
                                                <td> {{ $data->birthday }}</td>
                                                <td> {{ $data->neighbour }}</td>
                                                <td> {{ $data->address }}</td>
                                                <td>
                                                  
                                                    <!-- <a href="/candidate" style="background-color:#007bff" class="btn btn-primary"><i class="fa-solid fa-share"></i>Share</a> -->
                                                    <form class="d-inline" action="/candidate/approve/{{$data->id}}"
                                                    method="GET">
                                                        <button type="submit" id="btn-approve" class="btn btn-success btn-sm mr-1" style="background-color:#007bff">
                                                        <i class="fa-solid fa-thumbs-up"></i> Approve
                                                        </button>
                                                    </form>
                                                    <!-- <form class="d-inline" action="/barang/{{ $data->id }}/edit"
                                                        method="GET">
                                                        <button type="submit" class="btn btn-success btn-sm mr-1">
                                                            <i class="fa-solid fa-pen"></i> Edit
                                                        </button>
                                                    </form>
                                                    <form class="d-inline" action="/barang/{{ $data->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            id="btn-delete"><i class="fa-solid fa-trash-can"></i> Delete
                                                        </button>
                                                    </form> -->
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>

@endsection