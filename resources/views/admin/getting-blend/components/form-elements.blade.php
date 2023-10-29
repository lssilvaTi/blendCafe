<div class="form-group row align-items-center" :class="{'has-danger': errors.has('code'), 'has-success': fields.code && fields.code.valid }">
    <label for="code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.getting-blend.columns.code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.code" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('code'), 'form-control-success': fields.code && fields.code.valid}" id="code" name="code" placeholder="{{ trans('admin.getting-blend.columns.code') }}">
        <div v-if="errors.has('code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('code') }}</div>
    </div>
</div>

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('admin_user_id'), 'has-success': fields.admin_user_id && fields.admin_user_id.valid }">
    <label for="admin_user_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.getting-blend.columns.admin_user_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.admin_user_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('admin_user_id'), 'form-control-success': fields.admin_user_id && fields.admin_user_id.valid}" id="admin_user_id" name="admin_user_id" placeholder="{{ trans('admin.getting-blend.columns.admin_user_id') }}">
        <div v-if="errors.has('admin_user_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('admin_user_id') }}</div>
    </div>
</div> --}}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('stock_id'), 'has-success': fields.stock_id && fields.stock_id.valid }">
    <label for="stock_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.getting-blend.columns.stock_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect 
            v-model="stockSelected"
            placeholder="{{ trans('admin.getting-blend.columns.stock_id') }}"
            label="name"
            track-by="id"
            :options="stocks"
            open-direction="bottom"
            :allow-empty="true"
        >
        </multiselect>
        <div v-if="errors.has('stock_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('stock_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('blend_details_id'), 'has-success': fields.blend_details_id && fields.blend_details_id.valid }">
    <label for="blend_details_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.getting-blend.columns.blend_details_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect 
            v-model="blendDetailSelected"
            placeholder="{{ trans('admin.getting-blend.columns.blend_details_id') }}"
            label="name"
            track-by="id"
            :options="blendDetails"
            open-direction="bottom"
            :allow-empty="true"
        >
        </multiselect>
        <div v-if="errors.has('blend_details_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('blend_details_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('qtd'), 'has-success': fields.qtd && fields.qtd.valid }">
    <label for="qtd" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.getting-blend.columns.qtd') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.qtd" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('qtd'), 'form-control-success': fields.qtd && fields.qtd.valid}" id="qtd" name="qtd" placeholder="{{ trans('admin.getting-blend.columns.qtd') }}">
        <div v-if="errors.has('qtd')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('qtd') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('finished'), 'has-success': fields.finished && fields.finished.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="finished" type="checkbox" v-model="form.finished" v-validate="''" data-vv-name="finished"  name="finished_fake_element">
        <label class="form-check-label" for="finished">
            {{ trans('admin.getting-blend.columns.finished') }}
        </label>
        <input type="hidden" name="finished" :value="form.finished">
        <div v-if="errors.has('finished')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('finished') }}</div>
    </div>
</div>


