@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.coffee-grain.actions.edit', ['name' => $coffeeGrain->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <coffee-grain-form
                :action="'{{ $coffeeGrain->resource_url }}'"
                :stock-options="{{ json_encode($stockOptions) }}"
                :drink-options="{{ json_encode($drinkOptions) }}"
                :smell-options="{{ json_encode($smellOptions) }}"
                :aspect-options="{{ json_encode($aspectOptions) }}"
                :data="{{ $coffeeGrain->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.coffee-grain.actions.edit', ['name' => $coffeeGrain->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.coffee-grain.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </coffee-grain-form>

        </div>
    
</div>

@endsection