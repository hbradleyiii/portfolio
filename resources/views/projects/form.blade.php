                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug', null, array('class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('timeframe', 'Timeframe:') !!}
                    {!! Form::text('timeframe', null, array('class' => 'form-control')) !!}
                </div>

                <div class="form-group checkbox">
                    <label>
                        {!! Form::checkbox('published') !!}
                        Published
                    </label>
                </div>

                <div class="form-group checkbox">
                    <label>
                        {!! Form::checkbox('featured_website') !!}
                        Featured Website
                    </label>
                </div>

                <div class="form-group checkbox">
                    <label>
                        {!! Form::checkbox('featured_development') !!}
                        Featured Development
                    </label>
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    <input type="submit" value="{{ isset( $submit_button_text ) ? $submit_button_text : 'Create Project' }}" class="btn btn-primary">
                </div>
