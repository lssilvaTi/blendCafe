@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.getting-blend.actions.show'))

@section('body')

    <div class="card p-4">
        <div class="card-header">
            <h1>Blend: {{ $gettingBlend->code }}</h1>
            <small>Gerado em: {{ $gettingBlend->updated_at->format('d/m/Y H:i') }}</small>
        </div>

            <div class="row p-4">
                <div class="col">
                    <div class="card-body">
                        <h3><b>Características do Blend Gerado:</b></h2>
        
                        <div class="py-4">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Característica</th>
                                        <th>Resultado</th>
                                        <th>Min.</th>
                                        <th>Max.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>Defeito</b></td>
                                        <td >{{ $blendCaracteristics['def'] != 0 ? $blendCaracteristics['def'] : '' }}</td>
                                        <td>{{ $blendDetail['min_def'] != 0 ? $blendDetail['min_def'] : '' }}</td>
                                        <td>{{ $blendDetail['max_def'] != 0 ? $blendDetail['max_def'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Umidade</b></td>
                                        <td >{{ $blendCaracteristics['umid'] != 0 ? $blendCaracteristics['umid'] : '' }}</td>
                                        <td>{{ $blendDetail['min_umid'] != 0 ? $blendDetail['min_umid'] : '' }}</td>
                                        <td>{{ $blendDetail['max_umid'] != 0 ? $blendDetail['max_umid'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Impureza</b></td>
                                        <td >{{ $blendCaracteristics['imp'] != 0 ? $blendCaracteristics['imp'] : '' }}</td>
                                        <td>{{ $blendDetail['min_imp'] != 0 ? $blendDetail['min_imp'] : '' }}</td>
                                        <td>{{ $blendDetail['max_imp'] != 0 ? $blendDetail['max_imp'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Broca</b></td>
                                        <td >{{ $blendCaracteristics['broca'] != 0 ? $blendCaracteristics['broca'] : '' }}</td>
                                        <td>{{ $blendDetail['min_broca'] != 0 ? $blendDetail['min_broca'] : '' }}</td>
                                        <td>{{ $blendDetail['max_broca'] != 0 ? $blendDetail['max_broca'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.18</b></td>
                                        <td >{{ $blendCaracteristics['num18'] != 0 ? $blendCaracteristics['num18'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num18'] != 0 ? $blendDetail['min_num18'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num18'] != 0 ? $blendDetail['max_num18'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.17</b></td>
                                        <td >{{ $blendCaracteristics['num17'] != 0 ? $blendCaracteristics['num17'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num17'] != 0 ? $blendDetail['min_num17'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num17'] != 0 ? $blendDetail['max_num17'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.16</b></td>
                                        <td >{{ $blendCaracteristics['num16'] != 0 ? $blendCaracteristics['num16'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num16'] != 0 ? $blendDetail['min_num16'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num16'] != 0 ? $blendDetail['max_num16'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.15</b></td>
                                        <td >{{ $blendCaracteristics['num15'] != 0 ? $blendCaracteristics['num15'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num15'] != 0 ? $blendDetail['min_num15'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num15'] != 0 ? $blendDetail['max_num15'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.14</b></td>
                                        <td >{{ $blendCaracteristics['num14'] != 0 ? $blendCaracteristics['num14'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num14'] != 0 ? $blendDetail['min_num14'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num14'] != 0 ? $blendDetail['max_num14'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.13</b></td>
                                        <td >{{ $blendCaracteristics['num13'] != 0 ? $blendCaracteristics['num13'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num13'] != 0 ? $blendDetail['min_num13'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num13'] != 0 ? $blendDetail['max_num13'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.12</b></td>
                                        <td >{{ $blendCaracteristics['num12'] != 0 ? $blendCaracteristics['num12'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num12'] != 0 ? $blendDetail['min_num12'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num12'] != 0 ? $blendDetail['max_num12'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.10/11</b></td>
                                        <td >{{ $blendCaracteristics['num10'] != 0 ? $blendCaracteristics['num10'] : '' }}</td>
                                        <td>{{ $blendDetail['min_num10'] != 0 ? $blendDetail['min_num10'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num10'] != 0 ? $blendDetail['max_num10'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Fundo</b></td>
                                        <td >{{ $blendCaracteristics['numfundo'] != 0 ? $blendCaracteristics['numfundo'] : '' }}</td>
                                        <td>{{ $blendDetail['min_numfundo'] != 0 ? $blendDetail['min_numfundo'] : '' }}</td>
                                        <td>{{ $blendDetail['max_numfundo'] != 0 ? $blendDetail['max_numfundo'] : '' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <h3><b>Grãos utilizados:</b></h2>
        
                        <div class="py-4">
                            <h6>
                                <b>
                                    Quantidade de Sacas Total: {{ $gettingBlend->qtd }}
                                </b>
                            </h6>
                            <small>Estoque utilizado: {{ $stockUsed->name }} ( {{ $stockUsed->location }} )</small>
                        </div>

                        <div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Lote</th>
                                        <th class="text-right">Quantidade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coffeGrainsUsed as $coffeeGrain)
                                        <tr>
                                            <td>{{ $coffeeGrain->lote }}</td>
                                            <td class="text-right">{{ $coffeeGrain->pivot->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
