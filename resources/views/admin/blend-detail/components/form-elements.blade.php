<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.blend-detail.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_def'), 'has-success': fields.min_def && fields.min_def.valid }">
    <label for="min_def" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_def') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_def" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_def'), 'form-control-success': fields.min_def && fields.min_def.valid}" id="min_def" name="min_def" placeholder="{{ trans('admin.blend-detail.columns.min_def') }}">
        <div v-if="errors.has('min_def')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_def') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_def'), 'has-success': fields.max_def && fields.max_def.valid }">
    <label for="max_def" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_def') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_def" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_def'), 'form-control-success': fields.max_def && fields.max_def.valid}" id="max_def" name="max_def" placeholder="{{ trans('admin.blend-detail.columns.max_def') }}">
        <div v-if="errors.has('max_def')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_def') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_umid'), 'has-success': fields.min_umid && fields.min_umid.valid }">
    <label for="min_umid" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_umid') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_umid" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_umid'), 'form-control-success': fields.min_umid && fields.min_umid.valid}" id="min_umid" name="min_umid" placeholder="{{ trans('admin.blend-detail.columns.min_umid') }}">
        <div v-if="errors.has('min_umid')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_umid') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_umid'), 'has-success': fields.max_umid && fields.max_umid.valid }">
    <label for="max_umid" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_umid') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_umid" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_umid'), 'form-control-success': fields.max_umid && fields.max_umid.valid}" id="max_umid" name="max_umid" placeholder="{{ trans('admin.blend-detail.columns.max_umid') }}">
        <div v-if="errors.has('max_umid')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_umid') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_imp'), 'has-success': fields.min_imp && fields.min_imp.valid }">
    <label for="min_imp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_imp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_imp" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_imp'), 'form-control-success': fields.min_imp && fields.min_imp.valid}" id="min_imp" name="min_imp" placeholder="{{ trans('admin.blend-detail.columns.min_imp') }}">
        <div v-if="errors.has('min_imp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_imp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_imp'), 'has-success': fields.max_imp && fields.max_imp.valid }">
    <label for="max_imp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_imp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_imp" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_imp'), 'form-control-success': fields.max_imp && fields.max_imp.valid}" id="max_imp" name="max_imp" placeholder="{{ trans('admin.blend-detail.columns.max_imp') }}">
        <div v-if="errors.has('max_imp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_imp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_broca'), 'has-success': fields.min_broca && fields.min_broca.valid }">
    <label for="min_broca" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_broca') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_broca" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_broca'), 'form-control-success': fields.min_broca && fields.min_broca.valid}" id="min_broca" name="min_broca" placeholder="{{ trans('admin.blend-detail.columns.min_broca') }}">
        <div v-if="errors.has('min_broca')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_broca') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_broca'), 'has-success': fields.max_broca && fields.max_broca.valid }">
    <label for="max_broca" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_broca') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_broca" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_broca'), 'form-control-success': fields.max_broca && fields.max_broca.valid}" id="max_broca" name="max_broca" placeholder="{{ trans('admin.blend-detail.columns.max_broca') }}">
        <div v-if="errors.has('max_broca')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_broca') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num18'), 'has-success': fields.min_num18 && fields.min_num18.valid }">
    <label for="min_num18" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num18') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num18" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num18'), 'form-control-success': fields.min_num18 && fields.min_num18.valid}" id="min_num18" name="min_num18" placeholder="{{ trans('admin.blend-detail.columns.min_num18') }}">
        <div v-if="errors.has('min_num18')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num18') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num18'), 'has-success': fields.max_num18 && fields.max_num18.valid }">
    <label for="max_num18" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num18') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num18" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num18'), 'form-control-success': fields.max_num18 && fields.max_num18.valid}" id="max_num18" name="max_num18" placeholder="{{ trans('admin.blend-detail.columns.max_num18') }}">
        <div v-if="errors.has('max_num18')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num18') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num17'), 'has-success': fields.min_num17 && fields.min_num17.valid }">
    <label for="min_num17" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num17') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num17" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num17'), 'form-control-success': fields.min_num17 && fields.min_num17.valid}" id="min_num17" name="min_num17" placeholder="{{ trans('admin.blend-detail.columns.min_num17') }}">
        <div v-if="errors.has('min_num17')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num17') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num17'), 'has-success': fields.max_num17 && fields.max_num17.valid }">
    <label for="max_num17" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num17') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num17" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num17'), 'form-control-success': fields.max_num17 && fields.max_num17.valid}" id="max_num17" name="max_num17" placeholder="{{ trans('admin.blend-detail.columns.max_num17') }}">
        <div v-if="errors.has('max_num17')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num17') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num16'), 'has-success': fields.min_num16 && fields.min_num16.valid }">
    <label for="min_num16" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num16') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num16" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num16'), 'form-control-success': fields.min_num16 && fields.min_num16.valid}" id="min_num16" name="min_num16" placeholder="{{ trans('admin.blend-detail.columns.min_num16') }}">
        <div v-if="errors.has('min_num16')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num16') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num16'), 'has-success': fields.max_num16 && fields.max_num16.valid }">
    <label for="max_num16" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num16') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num16" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num16'), 'form-control-success': fields.max_num16 && fields.max_num16.valid}" id="max_num16" name="max_num16" placeholder="{{ trans('admin.blend-detail.columns.max_num16') }}">
        <div v-if="errors.has('max_num16')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num16') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num15'), 'has-success': fields.min_num15 && fields.min_num15.valid }">
    <label for="min_num15" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num15') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num15" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num15'), 'form-control-success': fields.min_num15 && fields.min_num15.valid}" id="min_num15" name="min_num15" placeholder="{{ trans('admin.blend-detail.columns.min_num15') }}">
        <div v-if="errors.has('min_num15')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num15') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num15'), 'has-success': fields.max_num15 && fields.max_num15.valid }">
    <label for="max_num15" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num15') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num15" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num15'), 'form-control-success': fields.max_num15 && fields.max_num15.valid}" id="max_num15" name="max_num15" placeholder="{{ trans('admin.blend-detail.columns.max_num15') }}">
        <div v-if="errors.has('max_num15')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num15') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num14'), 'has-success': fields.min_num14 && fields.min_num14.valid }">
    <label for="min_num14" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num14') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num14" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num14'), 'form-control-success': fields.min_num14 && fields.min_num14.valid}" id="min_num14" name="min_num14" placeholder="{{ trans('admin.blend-detail.columns.min_num14') }}">
        <div v-if="errors.has('min_num14')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num14') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num14'), 'has-success': fields.max_num14 && fields.max_num14.valid }">
    <label for="max_num14" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num14') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num14" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num14'), 'form-control-success': fields.max_num14 && fields.max_num14.valid}" id="max_num14" name="max_num14" placeholder="{{ trans('admin.blend-detail.columns.max_num14') }}">
        <div v-if="errors.has('max_num14')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num14') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num13'), 'has-success': fields.min_num13 && fields.min_num13.valid }">
    <label for="min_num13" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num13') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num13" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num13'), 'form-control-success': fields.min_num13 && fields.min_num13.valid}" id="min_num13" name="min_num13" placeholder="{{ trans('admin.blend-detail.columns.min_num13') }}">
        <div v-if="errors.has('min_num13')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num13') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num13'), 'has-success': fields.max_num13 && fields.max_num13.valid }">
    <label for="max_num13" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num13') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num13" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num13'), 'form-control-success': fields.max_num13 && fields.max_num13.valid}" id="max_num13" name="max_num13" placeholder="{{ trans('admin.blend-detail.columns.max_num13') }}">
        <div v-if="errors.has('max_num13')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num13') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num12'), 'has-success': fields.min_num12 && fields.min_num12.valid }">
    <label for="min_num12" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num12') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num12" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num12'), 'form-control-success': fields.min_num12 && fields.min_num12.valid}" id="min_num12" name="min_num12" placeholder="{{ trans('admin.blend-detail.columns.min_num12') }}">
        <div v-if="errors.has('min_num12')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num12') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num12'), 'has-success': fields.max_num12 && fields.max_num12.valid }">
    <label for="max_num12" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num12') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num12" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num12'), 'form-control-success': fields.max_num12 && fields.max_num12.valid}" id="max_num12" name="max_num12" placeholder="{{ trans('admin.blend-detail.columns.max_num12') }}">
        <div v-if="errors.has('max_num12')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num12') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_num10_11'), 'has-success': fields.min_num10_11 && fields.min_num10_11.valid }">
    <label for="min_num10_11" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_num10_11') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_num10_11" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_num10_11'), 'form-control-success': fields.min_num10_11 && fields.min_num10_11.valid}" id="min_num10_11" name="min_num10_11" placeholder="{{ trans('admin.blend-detail.columns.min_num10_11') }}">
        <div v-if="errors.has('min_num10_11')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_num10_11') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_num10_11'), 'has-success': fields.max_num10_11 && fields.max_num10_11.valid }">
    <label for="max_num10_11" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_num10_11') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_num10_11" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_num10_11'), 'form-control-success': fields.max_num10_11 && fields.max_num10_11.valid}" id="max_num10_11" name="max_num10_11" placeholder="{{ trans('admin.blend-detail.columns.max_num10_11') }}">
        <div v-if="errors.has('max_num10_11')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_num10_11') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('min_numfundo_b'), 'has-success': fields.min_numfundo_b && fields.min_numfundo_b.valid }">
    <label for="min_numfundo_b" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.min_numfundo_b') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.min_numfundo_b" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('min_numfundo_b'), 'form-control-success': fields.min_numfundo_b && fields.min_numfundo_b.valid}" id="min_numfundo_b" name="min_numfundo_b" placeholder="{{ trans('admin.blend-detail.columns.min_numfundo_b') }}">
        <div v-if="errors.has('min_numfundo_b')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('min_numfundo_b') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('max_numfundo_b'), 'has-success': fields.max_numfundo_b && fields.max_numfundo_b.valid }">
    <label for="max_numfundo_b" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.blend-detail.columns.max_numfundo_b') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.max_numfundo_b" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('max_numfundo_b'), 'form-control-success': fields.max_numfundo_b && fields.max_numfundo_b.valid}" id="max_numfundo_b" name="max_numfundo_b" placeholder="{{ trans('admin.blend-detail.columns.max_numfundo_b') }}">
        <div v-if="errors.has('max_numfundo_b')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('max_numfundo_b') }}</div>
    </div>
</div>


