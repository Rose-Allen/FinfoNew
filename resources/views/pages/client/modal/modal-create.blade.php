<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('client.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" name="bin" class="form-control" placeholder="bin"
                               value="{{old('bin')}}"
                        >
                        @error('bin')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="name"
                               value="{{old('name')}}"
                        >
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" class="form-control" placeholder="phone"
                               value="{{old('phone')}}"
                        >
                        @error('phone')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="email"
                               value="{{old('email')}}"
                        >
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="company_name" class="form-control" placeholder="company_name">
                    <input type="hidden" name="business_name" class="form-control" placeholder="business_name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">??????????????</button>
                    <button type="submit" class="btn btn-primary">????????????????</button>
                </div>
            </form>
        </div>
    </div>
</div>



