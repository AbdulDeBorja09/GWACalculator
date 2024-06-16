<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="height: 500px;">
            <div class="modal-body text-center p-5">
                <img src="{{url('image/delete.svg')}}" width="400px">
                <h2 style="margin-top: 50px">Are you sure you want to deactivate your account?</h2>
                <div class="text-center d-flex " style="justify-content: space-around; margin-top:50px">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('profileDelete')}}" method="POST">
                        @csrf
                        @method('POST')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>