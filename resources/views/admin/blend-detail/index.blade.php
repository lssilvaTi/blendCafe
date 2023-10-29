@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.blend-detail.actions.index'))

@section('body')

    <blend-detail-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/blend-details') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.blend-detail.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/blend-details/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.blend-detail.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'id'">{{ trans('admin.blend-detail.columns.id') }}</th>
                                        <th>Nome</th>
                                        <th>Defeito</th>
                                        <th>Umidade</th>
                                        <th>Impureza</th>
                                        <th>Broca</th>
                                        <th>P.18</th>
                                        <th>P.17</th>
                                        <th>P.16</th>
                                        <th>P.15</th>
                                        <th>P.14</th>
                                        <th>P.13</th>
                                        <th>P.12</th>
                                        <th>P.10/11</th>
                                        <th>Fundo</th>

                                        <th class="text-right">
                                            <b>Legenda:</b>
                                            <br>
                                            <span class="text-danger">Valor Mínimo</span>
                                            <br>
                                            <span class="text-success">Valor Máximo</span>
                                        </th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="29">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/blend-details')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/blend-details/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                        <td>@{{ item.id }}</td>
                                        <td>@{{ item.name }}</td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_def }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_def }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_umid }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_umid }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_imp }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_imp }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_broca }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_broca }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num18 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num18 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num17 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num17 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num16 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num16 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num15 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num15 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num14 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num14 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num13 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num13 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num12 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num12 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_num10_11 }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_num10_11 }}</span> 
                                            </b>
                                        </td>
                                        <td> 
                                            <b>
                                                <span class="text-danger">@{{ item.min_numfundo_b }}</span>
                                                <br>
                                                <span class="text-success">@{{ item.max_numfundo_b }}</span> 
                                            </b>
                                        </td>
 
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/blend-details/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.blend-detail.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </blend-detail-listing>

@endsection