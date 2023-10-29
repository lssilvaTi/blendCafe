<div class="form-group row align-items-center" :class="{'has-danger': errors.has('stock_id'), 'has-success': fields.stock_id && fields.stock_id.valid }">
    <label for="stock_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.stock_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect 
            v-model="stockSelected"
            placeholder="{{ trans('admin.coffee-grain.columns.stock_id') }}"
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

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lote'), 'has-success': fields.lote && fields.lote.valid }">
    <label for="lote" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.lote') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lote" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lote'), 'form-control-success': fields.lote && fields.lote.valid}" id="lote" name="lote" placeholder="{{ trans('admin.coffee-grain.columns.lote') }}">
        <div v-if="errors.has('lote')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lote') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nf'), 'has-success': fields.nf && fields.nf.valid }">
    <label for="nf" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.nf') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nf" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nf'), 'form-control-success': fields.nf && fields.nf.valid}" id="nf" name="nf" placeholder="{{ trans('admin.coffee-grain.columns.nf') }}">
        <div v-if="errors.has('nf')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nf') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('slip'), 'has-success': fields.slip && fields.slip.valid }">
    <label for="slip" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.slip') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.slip" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slip'), 'form-control-success': fields.slip && fields.slip.valid}" id="slip" name="slip" placeholder="{{ trans('admin.coffee-grain.columns.slip') }}">
        <div v-if="errors.has('slip')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slip') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('qtd'), 'has-success': fields.qtd && fields.qtd.valid }">
    <label for="qtd" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.qtd') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.qtd" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('qtd'), 'form-control-success': fields.qtd && fields.qtd.valid}" id="qtd" name="qtd" placeholder="{{ trans('admin.coffee-grain.columns.qtd') }}">
        <div v-if="errors.has('qtd')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('qtd') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('prod'), 'has-success': fields.prod && fields.prod.valid }">
    <label for="prod" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.prod') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.prod" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('prod'), 'form-control-success': fields.prod && fields.prod.valid}" id="prod" name="prod" placeholder="{{ trans('admin.coffee-grain.columns.prod') }}">
        <div v-if="errors.has('prod')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('prod') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('safra'), 'has-success': fields.safra && fields.safra.valid }">
    <label for="safra" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.safra') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.safra" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('safra'), 'form-control-success': fields.safra && fields.safra.valid}" id="safra" name="safra" placeholder="{{ trans('admin.coffee-grain.columns.safra') }}">
        <div v-if="errors.has('safra')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('safra') }}</div>
    </div>
</div>

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('bebida'), 'has-success': fields.bebida && fields.bebida.valid }">
    <label for="bebida" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.bebida') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.bebida" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('bebida'), 'form-control-success': fields.bebida && fields.bebida.valid}" id="bebida" name="bebida" placeholder="{{ trans('admin.coffee-grain.columns.bebida') }}">
        <div v-if="errors.has('bebida')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bebida') }}</div>
    </div>
</div> --}}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('bebida'), 'has-success': fields.bebida && fields.bebida.valid }">
    <label for="bebida" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.bebida') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect 
            v-model="drinkSelected"
            placeholder="{{ trans('admin.coffee-grain.columns.bebida') }}"
            label="name"
            track-by="name"
            :options="drinks"
            open-direction="bottom"
            :allow-empty="true"
        >
        </multiselect>
        <div v-if="errors.has('bebida')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bebida') }}</div>
    </div>
</div>

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('cheiro'), 'has-success': fields.cheiro && fields.cheiro.valid }">
    <label for="cheiro" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.cheiro') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cheiro" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cheiro'), 'form-control-success': fields.cheiro && fields.cheiro.valid}" id="cheiro" name="cheiro" placeholder="{{ trans('admin.coffee-grain.columns.cheiro') }}">
        <div v-if="errors.has('cheiro')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cheiro') }}</div>
    </div>
</div> --}}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cheiro'), 'has-success': fields.cheiro && fields.cheiro.valid }">
    <label for="cheiro" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.cheiro') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect 
            v-model="smellSelected"
            placeholder="{{ trans('admin.coffee-grain.columns.cheiro') }}"
            label="name"
            track-by="name"
            :options="smells"
            open-direction="bottom"
            :allow-empty="true"
        >
        </multiselect>
        <div v-if="errors.has('cheiro')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cheiro') }}</div>
    </div>
</div>

{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('aspecto'), 'has-success': fields.aspecto && fields.aspecto.valid }">
    <label for="aspecto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.aspecto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.aspecto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('aspecto'), 'form-control-success': fields.aspecto && fields.aspecto.valid}" id="aspecto" name="aspecto" placeholder="{{ trans('admin.coffee-grain.columns.aspecto') }}">
        <div v-if="errors.has('aspecto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('aspecto') }}</div>
    </div>
</div> --}}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('aspecto'), 'has-success': fields.aspecto && fields.aspecto.valid }">
    <label for="aspecto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.aspecto') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect 
            v-model="aspectSelected"
            placeholder="{{ trans('admin.coffee-grain.columns.aspecto') }}"
            label="name"
            track-by="name"
            :options="aspects"
            open-direction="bottom"
            :allow-empty="true"
        >
        </multiselect>
        <div v-if="errors.has('aspecto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('aspecto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('mofo'), 'has-success': fields.mofo && fields.mofo.valid }">
    <label for="mofo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.mofo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.mofo" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('mofo'), 'form-control-success': fields.mofo && fields.mofo.valid}" id="mofo" name="mofo" placeholder="{{ trans('admin.coffee-grain.columns.mofo') }}">
        <div v-if="errors.has('mofo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('mofo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('def'), 'has-success': fields.def && fields.def.valid }">
    <label for="def" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.def') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.def" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('def'), 'form-control-success': fields.def && fields.def.valid}" id="def" name="def" placeholder="{{ trans('admin.coffee-grain.columns.def') }}">
        <div v-if="errors.has('def')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('def') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('umid'), 'has-success': fields.umid && fields.umid.valid }">
    <label for="umid" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.umid') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.umid" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('umid'), 'form-control-success': fields.umid && fields.umid.valid}" id="umid" name="umid" placeholder="{{ trans('admin.coffee-grain.columns.umid') }}">
        <div v-if="errors.has('umid')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('umid') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('imp'), 'has-success': fields.imp && fields.imp.valid }">
    <label for="imp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.imp') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.imp" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('imp'), 'form-control-success': fields.imp && fields.imp.valid}" id="imp" name="imp" placeholder="{{ trans('admin.coffee-grain.columns.imp') }}">
        <div v-if="errors.has('imp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('imp') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('broca'), 'has-success': fields.broca && fields.broca.valid }">
    <label for="broca" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.broca') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.broca" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('broca'), 'form-control-success': fields.broca && fields.broca.valid}" id="broca" name="broca" placeholder="{{ trans('admin.coffee-grain.columns.broca') }}">
        <div v-if="errors.has('broca')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('broca') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num18'), 'has-success': fields.num18 && fields.num18.valid }">
    <label for="num18" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num18') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num18" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num18'), 'form-control-success': fields.num18 && fields.num18.valid}" id="num18" name="num18" placeholder="{{ trans('admin.coffee-grain.columns.num18') }}">
        <div v-if="errors.has('num18')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num18') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num17'), 'has-success': fields.num17 && fields.num17.valid }">
    <label for="num17" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num17') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num17" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num17'), 'form-control-success': fields.num17 && fields.num17.valid}" id="num17" name="num17" placeholder="{{ trans('admin.coffee-grain.columns.num17') }}">
        <div v-if="errors.has('num17')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num17') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num16'), 'has-success': fields.num16 && fields.num16.valid }">
    <label for="num16" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num16') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num16" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num16'), 'form-control-success': fields.num16 && fields.num16.valid}" id="num16" name="num16" placeholder="{{ trans('admin.coffee-grain.columns.num16') }}">
        <div v-if="errors.has('num16')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num16') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num15'), 'has-success': fields.num15 && fields.num15.valid }">
    <label for="num15" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num15') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num15" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num15'), 'form-control-success': fields.num15 && fields.num15.valid}" id="num15" name="num15" placeholder="{{ trans('admin.coffee-grain.columns.num15') }}">
        <div v-if="errors.has('num15')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num15') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num14'), 'has-success': fields.num14 && fields.num14.valid }">
    <label for="num14" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num14') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num14" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num14'), 'form-control-success': fields.num14 && fields.num14.valid}" id="num14" name="num14" placeholder="{{ trans('admin.coffee-grain.columns.num14') }}">
        <div v-if="errors.has('num14')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num14') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num13'), 'has-success': fields.num13 && fields.num13.valid }">
    <label for="num13" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num13') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num13" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num13'), 'form-control-success': fields.num13 && fields.num13.valid}" id="num13" name="num13" placeholder="{{ trans('admin.coffee-grain.columns.num13') }}">
        <div v-if="errors.has('num13')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num13') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num12'), 'has-success': fields.num12 && fields.num12.valid }">
    <label for="num12" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num12') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num12" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num12'), 'form-control-success': fields.num12 && fields.num12.valid}" id="num12" name="num12" placeholder="{{ trans('admin.coffee-grain.columns.num12') }}">
        <div v-if="errors.has('num12')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num12') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('num10_11'), 'has-success': fields.num10_11 && fields.num10_11.valid }">
    <label for="num10_11" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.num10_11') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.num10_11" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('num10_11'), 'form-control-success': fields.num10_11 && fields.num10_11.valid}" id="num10_11" name="num10_11" placeholder="{{ trans('admin.coffee-grain.columns.num10_11') }}">
        <div v-if="errors.has('num10_11')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('num10_11') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('numfundo_b'), 'has-success': fields.numfundo_b && fields.numfundo_b.valid }">
    <label for="numfundo_b" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.coffee-grain.columns.numfundo_b') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.numfundo_b" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('numfundo_b'), 'form-control-success': fields.numfundo_b && fields.numfundo_b.valid}" id="numfundo_b" name="numfundo_b" placeholder="{{ trans('admin.coffee-grain.columns.numfundo_b') }}">
        <div v-if="errors.has('numfundo_b')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('numfundo_b') }}</div>
    </div>
</div>
