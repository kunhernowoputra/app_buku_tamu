<!-- Button modal -->
<button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$target}}">
  {{$buttonIcon}}
  {{$buttonName}}
</button>

<!-- Modal -->
<div class="modal fade" id="{{$target}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">
          {{$modalTitleIcon}}
          {{$modalTitle}}
        </h4>
      </div>
      <div class="modal-body">
        {{$modalBody}}
      </div>
    </div>
  </div>
</div>
