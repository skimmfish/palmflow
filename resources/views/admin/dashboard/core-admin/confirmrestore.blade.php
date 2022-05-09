<div>
<h6>Please confirm if you are sure you want to restore this user?</h6>
<a href='{{ route("admin.dashboard.core-admin.user-restore",["id"=>$u->user_id,"profile_id"=>$u->id]) }}' type='submit' class="text-danger btn-orderless">Yes Restore</a>
<a href="#" type="button" class="btn btn-primary btn-black btn-round'">No</a>
</div>