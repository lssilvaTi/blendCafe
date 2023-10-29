@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.getting-blend.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <getting-blend-form
            :action="'{{ url('admin/getting-blends') }}'"
            :stock-options="{{ json_encode($stockOptions) }}"
            :blend-detail-options="{{ json_encode($blendDetailOptions) }}"
            :admin-user-id="{{ json_encode($adminUserId) }}"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.getting-blend.actions.create') }}
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