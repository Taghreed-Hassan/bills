<div class="modal fade" id="deleted{{$section->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف القسم</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('sections.destroy',$section->id )}}" method="post">
                    {{method_field('DELETE')}}
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <lable>اسم القسم</lable>
                            <input type="text" name="section_name" class="form-control" value="{{$section->section_name}}" readonly>
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button  class="btn btn-danger">حذف</button>
            </div>


            </form>
        </div>
    </div>
</div>
