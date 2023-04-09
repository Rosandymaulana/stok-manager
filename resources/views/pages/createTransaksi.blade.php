<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="#">

                    @csrf

                    <div class="form-group">
                        <label>Product ID</label>
                        <select name="type" class="form-control">
                            @foreach($idProducts as $findId)
                            <option value="{{ $findId->id }}">{{ $findId->product_ID }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('type'))
                        <div class="text-danger">
                            {{ $errors->first('type')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> IN
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> OUT
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="date" name="" id="">
                    </div>
                    {{--
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div> --}}

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" value="simpan">Save changes</button>
            </div>
        </div>
    </div>
</div>