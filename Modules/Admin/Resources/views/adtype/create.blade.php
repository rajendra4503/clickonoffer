@extends('admin::layouts.master')
 
    @section('content') 
      @include('admin::partials.navigation')
      @include('admin::partials.breadcrumb')   

       @include('admin::partials.sidebar')  
      <div class="panel panel-white"> 

 
        <div class="panel panel-flat">
                      <div class="panel-heading">
                    <h6 class="panel-title"><b>Create {{$heading ?? ''}}</b><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                    <div class="heading-elements">
                      <ul class="icons-list">
                        <li> <a type="button" href="{{route('role')}}" class="btn btn-primary text-white   btn-rounded "> View Roles<span class="legitRipple-ripple" ></span></a></li> 
                      </ul>
                    </div>
                  </div> 
            </div>


            {!! Form::model($role, ['route' => ['role.store'],'class'=>'form-basic ui-formwizard user-form','id'=>'user-form','enctype'=>'multipart/form-data']) !!}
                               
                @include('admin::role.form')

                <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="contact">
                                         
                    <thead>
                              <tr>
                                  <th class="text-center">Permission</th> 
                                   @foreach($role_type as $role )
                                   <th colspan="3" class="text-center">{{$role }} </th>
                                    @endforeach
                                
                              </tr>
                               <tr>
                                  <th class="text-center">Permission</th> 
                                   @foreach($role_type as $role )
                                   <th class="text-center"> Read</th>
                                    <th class="text-center"> Write</th>
                                     <th class="text-center"> Delete</th>
                                    @endforeach
                                
                              </tr> 
                             
                          </thead>
                          </tbody>
                         </tr>
                           @foreach($controllers as $route )
                               <tr>
                                   <td>{{$route}}</td>
                                @foreach($role_type as $role )
                                <?php
                                $canRead = '';
                                $canWrite = '';
                                $canDelete = '';
                                ?>
                                 <td class="text-center"> 
                                     <input type="checkbox" name="permission[{{$route}}][{{$role}}][read]" value="1"   @if($canRead)  checked="checked" @endif >
                                 </td>  
                                 <td class="text-center"> <input type="checkbox" name="permission[{{$route}}][{{$role}}][write]" value="1"  @if($canWrite)  checked="checked" @endif>
                                 </td> 
                                 <td class="text-center">  <input type="checkbox" name="permission[{{$route}}][{{$role}}][delete]" value="1"  @if($canDelete)  checked="checked" @endif>
                                 </td>
                                    @endforeach
                             </tr>     
                                @endforeach
                    </tbody>
                </table> 
                </div>
            {!! Form::close() !!}  
                     
        </div> 
@stop
