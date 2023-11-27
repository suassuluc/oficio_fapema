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
                                            <th class="text-center">Data </th>
                                            <th class="text-center">Autorizado </th>
                                            <th class="text-center">Confirmar Autorização</th>
                                        </tr>
                                    </thead>
                                </div>
                                <body>


                                    <tbody>
                                        @forelse ($oficio as $oficios)
                                        <tr>
                                            <td class="text-center">{{$oficios->id}}</td>
                                            <td class="text-center">{{$oficios->numeroFormatado}}</td>
                                            <td class="text-center">{{$oficios->assunto}}</td>
                                            <td class="text-center">{{$oficios->data}}</td>
                                            <td class="text-center">{{$oficios->autorizado }}</td>
                                            <td class="text-center">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="{{$oficios->id}}" wire:model.live="row.{{$oficios->id}}" wire:click="processMark({{ $oficios->id }})">
                                                    <label class="custom-control-label" for="{{$oficios->id}}"></label>
                                                </div>
                                            </td>

                                        </tr>

                                        {{ var_dump($row) }}

                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Nenhum Registro encontrado</td>
                                        </tr>
                                        @endforelse
                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <a class="btn btn-primary float-right" href="{{route('protocolos.create')}}">Adicionar Assunto do oficio</a>
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
