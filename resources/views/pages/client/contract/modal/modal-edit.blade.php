<!-- Modal -->
<div class="modal fade" id="modalEdit{{$contract->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('client.contracts.update', $contract->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" name="title" class="form-control" placeholder="title"
                               value="{{$contract->title}}"
                        >
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputFile">Редактировать контракт</label>
                        <div class="w-50  mb-3">
                            <img src="{{$contract->getFirstMediaUrl('contract')}}" />
                        </div>
                        <input type="file" name="file" class="form-control" placeholder="file"
                               value="{{old('file')}}"
                        >
                        @error('file')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="date" name="date_contract" class="form-control" placeholder="date"
                               value="{{$contract->date_contract}}"
                        >
                        @error('date_contract')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="client_id" value="{{$client->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>



