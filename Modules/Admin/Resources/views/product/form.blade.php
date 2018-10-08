
    <fieldset class="step ui-formwizard-content" id="step1" style="display: block;">

        <div class="row">

            <div class="col-md-12">
                <div class="form-group {{ $errors->first('product_title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                    <label class="control-label col-md-2">Product Title<span class="required"> * </span></label>
                    <div class="col-md-6">
                        {!! Form::text('product_title',null, ['class' => 'form-control','data-required'=>1])  !!}

                        <span class="help-block" style="color:red">{{ $errors->first('product_title', ':message') }}</span>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group {{ $errors->first('product_category', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                    <label class="control-label col-md-2">Select Category <span class="required"> * </span></label>
                    <div class="col-md-6">

                        {!! $categories !!}

                        <span class="help-block" style="color:red">{{ $errors->first('product_category', ':message') }}</span>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                    <div class="form-group {{ $errors->first('price', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                        <label class="control-label col-md-2">Product Price<span class="required"> * </span></label>
                        <div class="col-md-6">
                            {!! Form::text('price',null, ['class' => 'form-control','data-required'=>1])  !!}

                            <span class="help-block" style="color:red">{{ $errors->first('price', ':message') }}</span>
                        </div>
                    </div>
            </div>

            <div class="col-md-12">
                    <div class="form-group {{ $errors->first('discount', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                        <label class="control-label col-md-2">Product discount (%)<span class="required"> * </span></label>
                        <div class="col-md-6">
                                {!! Form::number('discount',0, ['class' => 'form-control form-cascade-control input-small','min'=>0])  !!}
                        <span class="help-block" style="color:red">{{ $errors->first('discount', ':message') }}</span>
                        </div>
                    </div>
            </div>

            <div class="col-md-12">
                    <div class="form-group {{ $errors->first('unit', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                        <label class="control-label col-md-2">Unit Description <span class="required"> * </span></label>
                        <div class="col-md-6">
                            {!! Form::text('unt',null, ['class' => 'form-control','data-required'=>1])  !!}

                            <span class="help-block" style="color:red">{{ $errors->first('unit', ':message') }} @if(session('field_errors')) {{ 'The Product title already been taken!' }} @endif</span>
                        </div>
                    </div>
            </div>

            <div class="col-md-12">
                    <div class="form-group {{ $errors->first('description', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                        <label class="control-label col-md-2">Description <span class="required"> * </span></label>
                        <div class="col-md-10">
                                {!! Form::textarea('description',null, ['class' => 'form-control ckeditor form-cascade-control input-small'])  !!}
                                <span class="help-block" style="color:red">{{ $errors->first('description', ':message') }}</span>
                                @if(Session::has('flash_alert_notice'))
                                <span class="label label-danger">

                                    {{ Session::get('flash_alert_notice') }}
                                </span>@endif
                        </div>
                    </div>
            </div>



        <div class="col-md-12">
                &nbsp;&nbsp;
            <div class="form-group{{ $errors->first('image', ' has-error') }}">
                    <label class="col-lg-2 col-md-2 control-label">Default Product Image</label>
                    <div class="col-lg-6 col-md-6">

                         {!! Form::file('image',null,['class' => 'form-control form-cascade-control input-small'])  !!}
                         <br>
                         @if(!empty($product->photo))
                             <img src="{!! Url::to('storage/uploads/products/'.$product->photo) !!}" width="100px">
                             <input type="hidden" name="photo" value="{!! $product->photo !!}">
                         @endif
                        <span class="help-block" style="color:red">{{ $errors->first('image', ':message') }}</span>
                    </div>
                </div>

        </div>


        <div class="col-md-12">
            <div class="form-group{{ $errors->first('image', ' has-error') }}">
                    <label class="col-lg-2 col-md-2 control-label">Product Image2</label>
                    <div class="col-lg-6 col-md-6">

                            {!! Form::file('image',null,['class' => 'form-control form-cascade-control input-small'])  !!}
                            <br>
                            @if(!empty($product->photo))
                                <img src="{!! Url::to('storage/uploads/products/'.$product->photo) !!}" width="100px">
                                <input type="hidden" name="photo1" value="{!! $product->photo !!}">
                            @endif
                        <span class="help-block" style="color:red">{{ $errors->first('image', ':message') }}</span>
                    </div>
                </div>

            </div>


            <div class="col-md-12">
                    <div class="form-group{{ $errors->first('image', ' has-error') }}">
                            <label class="col-lg-2 col-md-2 control-label">Product Image3</label>
                            <div class="col-lg-6 col-md-6">

                                    {!! Form::file('image',null,['class' => 'form-control form-cascade-control input-small'])  !!}
                                    <br>
                                    @if(!empty($product->photo))
                                        <img src="{!! Url::to('storage/uploads/products/'.$product->photo) !!}" width="100px">
                                        <input type="hidden" name="photo2" value="{!! $product->photo !!}">
                                    @endif
                                <span class="help-block" style="color:red">{{ $errors->first('image', ':message') }}</span>
                            </div>
                        </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group {{ $errors->first('status', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                        <label class="control-label col-md-2">Status</label>
                        <div class="col-md-6">
                                {!! Form::select('status',array('publish' => 'Publish', 'unpublish' => 'Unpublish'), ['class' => 'form-control'])  !!}
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group {{ $errors->first('meta_title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                        <label class="control-label col-md-2">Meta title</label>
                        <div class="col-md-6">
                                {!! Form::text('meta_title',null, ['class' => 'form-control form-cascade-control input-small'])  !!}
                                <span class="help-block" style="color:red">{{ $errors->first('meta_title', ':message') }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group {{ $errors->first('meta_key', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                        <label class="control-label col-md-2">Meta Key</label>
                        <div class="col-md-6">
                                {!! Form::text('meta_key',null, ['class' => 'form-control form-cascade-control input-small'])  !!}
                                <span class="help-block" style="color:red">{{ $errors->first('meta_key', ':message') }}</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                        &nbsp; &nbsp;
                        <div class="form-group {{ $errors->first('meta_description', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                            <label class="control-label col-md-2">Meta Description</label>
                            <div class="col-md-10">
                                    {!! Form::textarea('meta_description',null, ['class' => 'form-control ckeditor form-cascade-control input-small'])  !!}
                                    <span class="help-block" style="color:red">{{ $errors->first('meta_description', ':message') }}</span>
                                    @if(Session::has('flash_alert_notice'))
                                    <span class="label label-danger">

                                        {{ Session::get('flash_alert_notice') }}
                                    </span>@endif
                            </div>
                        </div>
                </div>

              &nbsp; &nbsp;
             <div class="col-md-12">

                <div class="form-group pull-right ">
                {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}

                 <a href="{{route('product')}}">
                    {!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
                </div>
            </div>

        </div>

    </fieldset >
