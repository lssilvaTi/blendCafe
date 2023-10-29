@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.getting-blend.actions.edit', ['name' => $gettingBlend->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <getting-blend-form
                :action="'{{ $gettingBlend->resource_url }}'"
                :stock-options="{{ json_encode($stockOptions) }}"
                :blend-detail-options="{{ json_encode($blendDetailOptions) }}"
                :data="{{ $gettingBlend->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.getting-blend.actions.edit', ['name' => $gettingBlend->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.getting-blend.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </getting-blend-form>

        </div>
    
</div>

@endsection