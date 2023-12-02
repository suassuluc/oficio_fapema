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
                                            <form method="POST" action="{{ route('protocolos.store') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="assunto">Assunto:</label>

                                                    <textarea class="form-control @error('assunto') is-invalid @enderror" name="assunto" id="textarea"
                                                        class="form-control"></textarea>
                                                    @error('assunto')
                                                        <span class="error invalid-feedback">Por favor coloque um assunto
                                                            valido</span>
                                                    @enderror
                                                </div>
                                        <tfoot>
                                            <tr>
                                                <td colspan="1">
                                                    <button type="submit" class="btn btn-primary float-right">Adicionar
                                                        Assunto</button>
                                                </td>
                                            </tr>
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
