<tr>
    <td class="text-center">{{ $oficio->id }}</td>
    <td class="text-center">{{ $oficio->numeroFormatado }}</td>
    <td class="text-center">{{ $oficio->assunto }}</td>
    <td class="text-center">{{ $oficio->setor->nome }}</td>
    <td class="text-center">{{ $oficio->data }}</td>
    <td class="text-center">{{ $oficio->autorizado }}</td>
    @if (auth()->user()->can('admin'))
        <td class="text-center">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input"
                    id="{{ $oficio->id }}"
                    wire:model.live='ichecked'
                    wire:click="processMark({{ $oficio->id }})" >
                <label class="custom-control-label"
                    for="{{ $oficio->id }}"></label>
            </div>
        </td>
    @endif

</tr>
{{-- colocar no campo numero formatado caso queira que o numero seja oculto --}}
{{-- @if ($ichecked)
                <p>{{$oficio->numero_formatado}}</p>

                @endif --}}
