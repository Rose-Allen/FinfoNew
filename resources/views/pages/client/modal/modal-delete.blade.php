<!-- Modal -->
<div class="modal fade" id="modalDelete{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('client.destroy', $client->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="">
                       Вы уверены, что хотите удалить  клиента?
                    </div>

                    <input type="hidden" name="company_name" class="form-control" placeholder="company_name">
                    <input type="hidden" name="business_name" class="form-control" placeholder="business_name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
            </form>
        </div>
    </div>
</div>



