<div>
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
                                <h3 class="card-title">Protocolos a Enviar:</h3>
                            </div>
                            <div class="card-body">
                                <div class="card-body p-0">
                                    <table class="table table-striped table-bordered">
                                        <div>
                                            <thead>
                                                <tr>
                                                    <th class="text-center">N°</th>
                                                    <th class="text-center">N° do oficio </th>
                                                    <th class="text-center">Assunto</th>
                                                    <th class="text-center">Destino</th>
                                                    <th class="text-center">Data </th>
                                                    <th class="text-center">Autorizado </th>
                                                    @if (auth()->user()->can('admin'))
                                                        <th class="text-center">Confirmar Autorização</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                        </div>
                                        <body>
                                            <tbody>
                                                @forelse ($oficio as $oficios)
                                                <livewire:oficio-row :oficio="$oficios" :key="$oficios->id"/>
                                                @empty
                                                    <tr>
                                                        <td colspan="7" class="text-center">Nenhum Registro
                                                            encontrado</td>
                                                    </tr>
                                                @endforelse
                                            <tfoot>
                                                <tr>
                                                    <td colspan="7">
                                                        <a class="btn btn-primary float-right"
                                                            href="{{ route('protocolos.create') }}">Adicionar Assunto
                                                            do oficio</a>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                            </tbody>
                                        </body>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </section>




</div>
