<div class="col-md-8">

     <div class="card mb-3">

        <div class="card-body">

              <div class="form-group mb-3 {{ $errors->has('title') ? 'has-error' : '' }}">
                  {!! Form::label('title') !!}
                  {!! Form::text('title', null, ['class' => 'form-control']) !!}

                  @if($errors->has('title'))
                  <span class="help-block">{{ $errors->first('title') }}</span>
                  @endif
              </div>

              <div class="form-group mb-3  {{ $errors->has('slug') ? 'has-error' : '' }}">
                  {!! Form::label('slug') !!}
                  {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                  @if($errors->has('slug'))
                  <span class="help-block">{{ $errors->first('slug') }}</span>
                  @endif
              </div>
              <div class="form-group mb-3  excerpt">
                  {!! Form::label('excerpt') !!}
                  {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                  </div>
                  @if($errors->has('excerpt'))
                  <span class="help-block">{{ $errors->first('excerpt') }}</span>
                  @endif
              <div class="form-group mb-3  {{ $errors->has('body') ? 'has-error' : '' }}">
                  {!! Form::label('body') !!}
                  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                  @if($errors->has('body'))
                  <span class="help-block">{{ $errors->first('body') }}</span>
                  @endif
              </div>     
        </div>

      </div>

</div> 


 <div class="col-md-4">

    <div class="card mb-3">

        <div class="card-header">
             <h3 class="card-title">Publish Date</h3>
        </div>

        <div class="card-body">

              <div class="form-group  {{ $errors->has('published_at') ? 'has-error' : '' }}">
                   
                  
                    <div class='input-group date' id='datetimepicker1'>
                        {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>


                    @if($errors->has('published_at'))
                        <span class="help-block">{{ $errors->first('published_at') }}</span>
                    @endif
              </div>

              <div class="card-footer text-end">
                  <div class="d-flex">
                    <a id="draft-btn" class="btn btn-default">Save Draft</a>
                    {!! Form::submit('Publish', ['class' => 'btn btn-primary ms-auto']) !!}
                  
                  </div>
              </div>

              

                
        </div>
   

    </div>
    {{-- end card--}}


     <div class="card mb-3">

        <div class="card-header">
             <h3 class="card-title">Category</h3>
        </div>
        
        <div class="card-body">

            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
               
                {!! Form::select('category_id', App\Models\BlogCategory::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}

                @if($errors->has('category_id'))
                    <span class="help-block">{{ $errors->first('category_id') }}</span>
                @endif
            </div>
        </div>
    </div>


    <div class="card">

        <div class="card-header">
             <h3 class="card-title">Feature Image</h3>
        </div>

        <div class="card-body">

           
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                    

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail mb-3 " style="width: 250px; height: 200px;">
                             <img src="{{ ($blog->image_thumb_url) ? $blog->image_thumb_url : '/img/default-image.jpeg' }}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="width: 250px; height: 200px;">
                            
                        </div>
                        <div style="margin-top: 10px;">
                          <span class="btn btn-outline-secondary btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            {!! Form::file('image') !!}
                          </span>
                          <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                   
                    @if($errors->has('image'))
                        <span class="help-block">{{ $errors->first('image') }}</span>
                    @endif
                </div>   
            </div> 

        </div>

    </div>   

    {{-- end card--}}    