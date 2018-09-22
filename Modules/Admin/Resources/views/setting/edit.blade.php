@extends('admin::layouts.master')
@section('content') 
@include('admin::partials.navigation')
@include('admin::partials.breadcrumb')   
@include('admin::partials.sidebar') 
      <!-- /main sidebar -->

<div class="panel panel-white"> 
    <div class="panel panel-flat">
        <div class="panel-heading">
                <h6 class="panel-title"><b> {{$heading }}</b><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                <div class="heading-elements">
                  <ul class="icons-list">
                    <li> <a type="button" href="{{route('role.create')}}" class="btn btn-primary text-white btn-labeled btn-rounded "><b><i class="icon-plus3"></i></b> Add Role<span class="legitRipple-ripple" ></span></a></li> 
                  </ul>
            </div>
        </div> 
    </div>  
                
    <div class="panel-body">

        {!! Form::model($setting, ['method' => 'PATCH', 'route' => ['setting.update', $setting->id],'class'=>'form-basic ui-formwizard user-form','id'=>'form_sample_3','enctype'=>'multipart/form-data']) !!}
            @include('admin::setting.form', compact('setting'))
        {!! Form::close() !!} 
        <!-- END CONTENT BODY -->
    </div>
</div>    
    <!-- END QUICK SIDEBAR -->
</div>
@stop