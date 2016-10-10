                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, array('class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, array('class' => 'form-control')) !!}
                </div>

                <div class="form-group checkbox">
                    <label>
                        {!! Form::checkbox('published') !!}
                        Published
                    </label>
                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Content:') !!}
                    {!! Form::textarea('body', null, array('class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    <input type="submit" value="{{ isset( $submit_button_text ) ? $submit_button_text : 'Create Page' }}" class="btn btn-primary">
                </div>
