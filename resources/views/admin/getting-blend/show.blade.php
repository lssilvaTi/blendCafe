@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.getting-blend.actions.show'))

@section('body')

    <div class="card p-4">
        <div class="card-header">
            <h1>Montando Blend: {{ $gettingBlend->code }}</h1>
        </div>

        <div class="card-body">
            <b>Qual método de otimização deseja utilizar?</b>
        </div>

        <div class="btn-group p-2" role="group" aria-label="Métodos de Otimização">
            <a class="btn btn-primary m-1" href="{{ url('admin/getting-blends/'.$gettingBlend->id.'/showOptimeze?type=1') }}" role="button">
                <i class="fa fa-calculator"></i> Minima Folga
            </a>
            <a class="btn btn-primary m-1" href="{{ url('admin/getting-blends/'.$gettingBlend->id.'/showOptimeze?type=2') }}" role="button">
                <i class="fa fa-calculator"></i> Máxima utilização dos Lotes
            </a>
            <a class="btn btn-primary m-1" href="{{ url('admin/getting-blends/'.$gettingBlend->id.'/showOptimeze?type=3') }}" role="button">
                <i class="fa fa-calculator"></i> Safra mais antiga
            </a>
        </div>
        
        @if ($enabledResults)
            <div class="row p-4">
                <div class="col">
                    <div class="card-body">
                        <h3><b>Especificações:</b></h2>
        
                        <div class="py-4">
                            <h5>
                                <b>
                                    Quantidade de Sacas desejada: {{ $gettingBlend->qtd }}
                                </b>
                            </h5>
                        </div>
                        <div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Característica</th>
                                        <th>Min.</th>
                                        <th>Max.</th>
                                        <th class="text-right">Média Obitida</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>Defeito</b></td>
                                        <td>{{ $blendDetail['min_def'] != 0 ? $blendDetail['min_def'] : '' }}</td>
                                        <td>{{ $blendDetail['max_def'] != 0 ? $blendDetail['max_def'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['def'] != 0 ? $characteristicsAvg['def'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Umidade</b></td>
                                        <td>{{ $blendDetail['min_umid'] != 0 ? $blendDetail['min_umid'] : '' }}</td>
                                        <td>{{ $blendDetail['max_umid'] != 0 ? $blendDetail['max_umid'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['umid'] != 0 ? $characteristicsAvg['umid'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Impureza</b></td>
                                        <td>{{ $blendDetail['min_imp'] != 0 ? $blendDetail['min_imp'] : '' }}</td>
                                        <td>{{ $blendDetail['max_imp'] != 0 ? $blendDetail['max_imp'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['imp'] != 0 ? $characteristicsAvg['imp'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Broca</b></td>
                                        <td>{{ $blendDetail['min_broca'] != 0 ? $blendDetail['min_broca'] : '' }}</td>
                                        <td>{{ $blendDetail['max_broca'] != 0 ? $blendDetail['max_broca'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['broca'] != 0 ? $characteristicsAvg['broca'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.18</b></td>
                                        <td>{{ $blendDetail['min_num18'] != 0 ? $blendDetail['min_num18'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num18'] != 0 ? $blendDetail['max_num18'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num18'] != 0 ? $characteristicsAvg['num18'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.17</b></td>
                                        <td>{{ $blendDetail['min_num17'] != 0 ? $blendDetail['min_num17'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num17'] != 0 ? $blendDetail['max_num17'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num17'] != 0 ? $characteristicsAvg['num17'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.16</b></td>
                                        <td>{{ $blendDetail['min_num16'] != 0 ? $blendDetail['min_num16'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num16'] != 0 ? $blendDetail['max_num16'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num16'] != 0 ? $characteristicsAvg['num16'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.15</b></td>
                                        <td>{{ $blendDetail['min_num15'] != 0 ? $blendDetail['min_num15'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num15'] != 0 ? $blendDetail['max_num15'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num15'] != 0 ? $characteristicsAvg['num15'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.14</b></td>
                                        <td>{{ $blendDetail['min_num14'] != 0 ? $blendDetail['min_num14'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num14'] != 0 ? $blendDetail['max_num14'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num14'] != 0 ? $characteristicsAvg['num14'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.13</b></td>
                                        <td>{{ $blendDetail['min_num13'] != 0 ? $blendDetail['min_num13'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num13'] != 0 ? $blendDetail['max_num13'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num13'] != 0 ? $characteristicsAvg['num13'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.12</b></td>
                                        <td>{{ $blendDetail['min_num12'] != 0 ? $blendDetail['min_num12'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num12'] != 0 ? $blendDetail['max_num12'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num12'] != 0 ? $characteristicsAvg['num12'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>p.10/11</b></td>
                                        <td>{{ $blendDetail['min_num10'] != 0 ? $blendDetail['min_num10'] : '' }}</td>
                                        <td>{{ $blendDetail['max_num10'] != 0 ? $blendDetail['max_num10'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['num10'] != 0 ? $characteristicsAvg['num10'] : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Fundo</b></td>
                                        <td>{{ $blendDetail['min_numfundo'] != 0 ? $blendDetail['min_numfundo'] : '' }}</td>
                                        <td>{{ $blendDetail['max_numfundo'] != 0 ? $blendDetail['max_numfundo'] : '' }}</td>
                                        <td class="text-right">{{ $characteristicsAvg['numfundo'] != 0 ? $characteristicsAvg['numfundo'] : '' }}</td>
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
                            <h5>
                                <b>
                                    Quantidade de Sacas obtidas: {{ $responseInfos['totalQuantityUsed'] }}
                                </b>
                            </h5>
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
                                    @foreach ($grainsUsed as $item)
                                        <tr>
                                            <td>{{ $item['lote'] }}</td>
                                            <td class="text-right">{{ $item['quantity'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <form action="{{ route('admin/getting-blends/makeBlend') }}" method="POST">
                            @csrf
                            <input type="hidden" name="gettingBlendId" value="{{ $gettingBlend->id }}">
                            
                            <input type="hidden" name="grainsUsed" value="{{ json_encode($grainsUsed) }}">

                            <input type="hidden" name="characteristicsAvg" value="{{ json_encode($characteristicsAvg) }}">
                    
                            <button type="submit" class="btn btn-success p-2">
                                <i class="fa fa-check"></i> Confirmar Montagem do Blend
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
