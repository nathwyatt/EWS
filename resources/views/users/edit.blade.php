@extends('layouts.dashboard')
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="card-header justify-content-between text-center">
            <h2>Edit {{Auth::user()->name }} </h2>
            <div class="date-range-report ">
             <span></span>
            </div>
      </div>
                <div class="pull-right">
                    <a class="badge  badge-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
         </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<div class="card card-table-border-none dt-responsive nowrap" style="width:100%" id="recent-orders">

<div class="row">
	<div class="col-lg-12">
		<div class="card card-default">
			
<div class="container">
			<div class="card-body">
				<form >
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label for="validationServer01">Names </label>

                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
							<div class="valid-feedback">
								full names
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<label for="validationServer02">Email</label>

                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
							<div class="valid-feedback">
								input valid email
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<label for="validationServerUsername">password</label>

                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
							<div class="invalid-feedback">
								input strong password.
							</div>
						</div>
					</div>
                    <div class="col-md-12 mb-3">
                        <label for="validationServer05">confirm password</label>

                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

                        <div class="invalid-feedback">
                            
                        </div>
                    </div>

					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationServer03">User Role</label>

                            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

							<div class="invalid-feedback">
								select Role.
							</div>
						</div>
                        <div class="col-md-6 mb-3 text-center">
                        <label for="validationServer03">profile picture</label>
                        <div>
                            <input type="file" name="avatar">
                        </div>
                        </div>
					</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
    </div>

</div>
</div>
{!! Form::close() !!}
<p class="text-center text-primary"><small>Aime-Wyatt</small></p>
@endsection