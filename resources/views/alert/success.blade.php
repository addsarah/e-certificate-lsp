@if(session('status'))
<div class="alert alert-success alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
<strong>{{session('status')}}</strong>
</div>
@endif