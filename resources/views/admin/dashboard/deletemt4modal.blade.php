
<div class="row">
    <p><small>Are you sure you want to delete this MT4 trading account?</small></p>
<form action="{{route('admin.dashboard.deleteacc',['id'=>$id])}}" method="POST">
    @csrf @method('DELETE')
    <input type="hidden" value="{{$id}}" name="id" />
                            <button class="btn btn-danger" name="delete">Yes Delete!</button>
                            <a href="#" type="button" class="btn btn-warning close" style="width:auto;
                            line-height:28px;padding-left:25px;padding-right:25px;height:35px;border-radius:35px;border:0;text-align:center" data-dismiss="modal" aria-label="Close">No</a>
                        </form>

</div>