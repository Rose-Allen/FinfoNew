<!-- Modal -->
<div class="modal fade" id="modalEdit{{$requisite->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('user.requisites.update', $requisite->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" name="title_bank" class="form-control" placeholder="title_bank"
                               value="{{$requisite->title_bank}}"
                        >
                        @error('title_bank')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="iik" class="form-control" placeholder="iik"
                               value="{{$requisite->iik}}"
                        >
                        @error('iik')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="bik" class="form-control" placeholder="bik"
                               value="{{$requisite->bik}}"
                        >
                        @error('bik')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="kbe" class="form-control" placeholder="kbe"
                               value="{{$requisite->kbe}}"
                        >
                        @error('kbe')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">??????????????</button>
                    <button type="submit" class="btn btn-primary">????????????????</button>
                </div>
            </form>
        </div>
    </div>
</div>



