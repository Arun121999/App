@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif
            <div class="card">
                @csrf

                <table class="table table-striped">
                	<thead>
                	<tr>
                		<th>Name</th>
                		<th>Name</th>
                		<th>Email</th>
                		<th>Role</th>
                		<th>Actions</th>
                	</tr>
                </thead>
                <tbody>
					@if($contacts->count()>0)
					<?php $i=1; ?>
					@foreach($contacts as $contact)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ $contact->name }}</td>
						<td>{{ $contact->email }}</td>
						<td>{{ $contact->role }}</td>
						<td>
							<a href = 'edit-member/{{ $contact->id }}' class="btn btn-primary">Edit</a>
 							<a href = 'member/{{ $contact->id }}' class="btn btn-danger">Delete</a>

						</td>
					</tr>
					<?php $i++; ?>
					@endforeach
					@else
					<tr><td colspan="5" class="text-center">No Record Found</td></tr>
					@endif
				</tbody>
				</table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
/*$(document).on("click", ".delete" , function() {
  var id = $(this).data('id');
  var el = this;
  $.ajax({
    url: 'member/'+id,
    type: 'get',
    success: function(response){
      $(el).closest( "tr" ).remove();
      alert(response);
    }
  });
});*/
</script>
@endsection
