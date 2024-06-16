<div class="add-finals-modal modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="{{route('submitEdit')}}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-header text-center">
                    <h1 class="modal-title  fs-5">Add Final Grades</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-9 text-center">
                            <h6>Subjects</h6>
                        </div>
                        <div class="col-lg-3 text-center">
                            <h6>Final Grade</h6>
                        </div>
                        <input type="hidden" name="id" value="{{$computation->id}}">
                        @for ($i = 0; $i < $module->subjects; $i++)
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="subjects{{ $i }}" required step="0.01"
                                    value="{{$subject[$i]}}" readonly>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <input class="form-control grade-input" type="number" id="grade_{{ $i }}" name="final[]"
                                    step="0.01">
                            </div>
                            @endfor
                    </div>
                </div>
                <div class="modal-footertext-center d-flex">

                    <div class="col-lg-6 text-center">
                        <button type="button" class="btn btn-secondary w-50" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-lg-6 text-center">
                        <button type="submit" class="btn btn-success w-50">Submit</button>
                    </div>
                </div>
                <div style="height: 20px"></div>
            </form>
        </div>
    </div>
</div>

<div class="add-finals-modal modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="{{route('submitgrades')}}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-header text-center">
                    <h1 class="modal-title  fs-5">Edit Grades</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @if($finals === NULL)
                        <div class="col-lg-9 text-center">
                            <h6>Subjects</h6>
                        </div>
                        <div class="col-lg-3 text-center">
                            <h6>Midterm Grades</h6>
                        </div>
                        @else
                        <div class="col-lg-6 text-center">
                            <h6>Subjects</h6>
                        </div>
                        <div class="col-lg-3 text-center">
                            <h6>Midterm Grades</h6>
                        </div>
                        <div class="col-lg-3 text-center">
                            <h6>Final Grades</h6>
                        </div>
                        @endif
                        <input type="hidden" name="id" value="{{ $computation->id }}">
                        @for ($i = 0; $i < $module->subjects; $i++)

                            @if($finals)
                            <div class="col-lg-6">
                                <input class="form-control" type="text" required step="0.01" value="{{ $subject[$i] }}"
                                    readonly>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <input class="form-control grade-input" type="number" name="grades[]" step="0.01">
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <input class="form-control grade-input" type="number" name="final[]" step="0.01">
                            </div>
                            @else
                            <div class="col-lg-9">
                                <input class="form-control" type="text" required step="0.01" value="{{ $subject[$i] }}"
                                    readonly>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <input class="form-control grade-input" type="number" name="grades[]" step="0.01">
                            </div>

                            @endif
                            @endfor

                    </div>
                </div>
                <div class="modal-footertext-center d-flex">

                    <div class="col-lg-6 text-center">
                        <button type="button" class="btn btn-secondary w-50" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-lg-6 text-center">
                        <button type="submit" class="btn btn-success w-50">Submit</button>
                    </div>
                </div>
                <div style="height: 20px"></div>
            </form>
        </div>
    </div>
</div>

<div class="add-finals-modal modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="{{route('submitsubjects')}}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-header text-center">
                    <h1 class="modal-title  fs-5">Edit Subjects</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h6>Subjects</h6>
                        </div>

                        <input type="hidden" name="id" value="{{$computation->id}}">
                        @for ($i = 0; $i < $module->subjects; $i++)
                            <div class="col-lg-12">
                                <input class="form-control" type="text" id="subjects{{ $i }}" required step="0.01"
                                    value="{{$subject[$i]}}" name="subjects[]">
                            </div>
                            @endfor
                    </div>
                </div>
                <div class="modal-footertext-center d-flex">

                    <div class="col-lg-6 text-center">
                        <button type="button" class="btn btn-secondary w-50" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="col-lg-6 text-center">
                        <button type="submit" class="btn btn-success w-50">Submit</button>
                    </div>
                </div>
                <div style="height: 20px"></div>
            </form>
        </div>
    </div>
</div>