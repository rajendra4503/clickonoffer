@extends('admin::layouts.master') 
    @section('content') 
      @include('admin::partials.main-header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('admin::partials.main-sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper"> 
       @include('admin::partials.breadcrumb')
        <!-- Main content -->
          <section class="content">
            <!-- Small boxes (Stat box) -->
              <div class="row">
                  <div class="col-md-12">
                       <div class="panel panel-cascade">
                          <div class="panel-body ">
                              <div class="row">  
                                      {!! Form::model($user, ['route' => ['user.store'],'class'=>'form-horizontal','id'=>'users_form']) !!}
                                        @include('admin::users.user.form')
                                      {!! Form::close() !!}
                              </div>
                          </div>
                    </div>
                </div>            
              </div>  
            <!-- Main row --> 
          </section><!-- /.content -->
      </div> 
@stop
