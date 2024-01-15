@extends('adminlte::page')

@section('content')
    <section class = "content_header">
        <section class = "content">
            <div class ="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Controle de oficios</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Criação de Protocolos a Enviar:</h3>
                            </div>
                            <div class="card-body">
                                <div class="card-body p-0">
                                    <table class="table table-striped table-bordered">
                                        <tbody>

                                            <form method="POST" action="{{ route('protocolos.store') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="assunto">Assunto:</label>
                                                    <textarea class="form-control @error('assunto') is-invalid @enderror" name="assunto" placeholder="Insira o assunto aqui" id="textarea"
                                                        style="margin-bottom: 10px"></textarea>
                                                    @error('assunto')
                                                        <span class="error invalid-feedback">Por favor coloque um assunto
                                                            valido</span>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="">Destino:</label>
                                                        <select class="form-control" name="setor_id" id=""
                                                            style="margin-bottom: 10px">
                                                            <option value="">Nenhum</option>
                                                            @foreach ($setores as $setor)
                                                                <option value="{{ $setor->id }}">{{ $setor->nome }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    {{-- <label for="">Documento:</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="arquivo">
                                                        <label class="custom-file-label" for="customFile">
                                                            Nenhum arquivo Selecionado
                                                        </label>
                                                    </div>
                                                </div> --}}
                                        <tfoot class="border border-danger">
                                            <div>
                                                <button type="submit" class="btn btn-primary float-right ">Adicionar
                                                    Assunto</button>
                                            </div>

                                        </tfoot>
                                        </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </section>
@endsection
