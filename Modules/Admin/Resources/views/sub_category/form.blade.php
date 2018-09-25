 <fieldset class="step ui-formwizard-content" id="step1" style="display: block;">
        
        <div class="row">

          
	    <div class="col-md-12"> 
            <div class="form-group {{ $errors->first('category_name', ' has-error') }}">
                 <label class="control-label col-md-2">Select  Category
                        <span class="required">  </span>
                    </label>
                <div class="col-md-6"> 
                 <select name="category_name" class="form-control">
                   <option value="">Select  Category...</option>
                    @foreach($categories as $key=>$value)
                    
                    <option value="{{$value->id}}" @if(isset($category->id) && ($value->id==$category->parent_id)) {{ 'selected="selected"'}}  @endif 

                    @if($value->id==old('category_name'))  {{ 'selected="selected"'}} @endif
                      >
                    
                    {{ $value->category_name }}
                    
                    </option>
                    @endforeach
                    </select>
                    <span class="help-block">{{ $errors->first('category_name', ':message') }}</span>
                </div>
            </div> 
        </div>
        <div class="col-md-12">
            <div class="form-group {{ $errors->first('sub_category_name', ' has-error') }}
            @if(session('field_errors')) {{ 'has-error' }} @endif
            ">
                    <label class="control-label col-md-2">Sub Category Name <span class="required"> * </span></label>
                    <div class="col-md-6"> 
                        {!! Form::text('sub_category_name',null, ['class' => 'form-control','data-required'=>1])  !!} 
                        <span class="help-block">{{ $errors->first('sub_category_name', ':message') }} @if(session('field_errors')) {{ 'The Category name already been taken!' }} @endif </span>
                    </div>
                </div> 
                
        </div>
        <div class="col-md-12">
            <div class="form-group last">
                    <label class="control-label col-md-2"> Image  <span class="required"> * </span></label>
                    <div class="col-md-9">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{!! $url??'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image'!!}" alt=""> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                   
                {!! Form::file('sub_category_image',null,['class' => 'form-control form-cascade-control input-small'])  !!}


                                     </span>
                                      <span class="help-block" style="color:#e73d4a">{{ $errors->first('sub_category_image', ':message') }}</span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                       
                    </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group {{ $errors->first('description', ' has-error') }}">
                <label class="control-label col-md-2">Description<span class="required"> </span></label>
                <div class="col-md-6"> 
                    {!! Form::textarea('description',null, ['class' => 'form-control','data-required'=>1,'rows'=>3,'cols'=>5])  !!} 
                    
                    <span class="help-block">{{ $errors->first('description', ':message') }}</span>
                </div>
            </div> 
        </div>
                 
             
        <div class="col-md-12">
                  <div class="form-group pull-right ">
                {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}

                 <a href="{{route('sub-category')}}">
            {!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
                     </div>   
            </div> 

        </div> 
 
    </fieldset > 
 