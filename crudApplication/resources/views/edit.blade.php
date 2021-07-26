@extends('layout')

@section('content')


<div >
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('updateUser')}}" method="GET">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close">&times;</button>
				</div>
				<div class="modal-body">			
                <div class="form-group">
					<!--<label type="">Token</label>-->
						<input type="hidden" class="form-control" name="id" value="{{ $user->id}}">
					</div>		
					<div class="form-group">
		                <label >Token</label>
						<input type="text" class="form-control" name="name" value="{{ $user->name}}">
					</div>
					<div class="form-group">
			<!--<label type="">Token</label>-->
						<input type="hidden" class="form-control" name="email" value="{{ $user->email}}">
					</div>
                    <div class="form-group">
					<!--<label type="">Token</label>-->
						<input type="hidden" class="form-control" name="email_verified_at" value="{{ $user->email_verified_at}}">
					</div>
                    <div class="form-group">
				<!--<label type="">Token</label>-->
						<input type="hidden" class="form-control" name="password" value="{{ $user->password}}">
					</div>
                    <div class="form-group">
						<!--<label type="">Token</label>-->
						<input type="hidden" class="form-control" name="remember_token" value="{{ $user->remember_token}}">
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default close" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>

@section('content')
