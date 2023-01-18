<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
              <div class="card bg-success text-white">
                <div class="card-header bg-primary">
                    status
                </div>
                <div class="card-body">

                    komentar <br  />
                    <input type="text" class="form-control" wire:model='txtkomentar' />
                    <br  />
                    <input type="submit" class="btn btn-danger" value="kirim" wire:click='simpan' />

                </div>
              </div>
            </div>
            <div class="col-9">
                <div class="card bg-success text-white">
                    <div class="card-header bg-primary">
                        kiriman saya
                    </div>
                    <div class="card-body">
                        saya :<br />
                        <p>
                            <i>
                                {{ $txtkomentar }}
                            </i>
                        </p>
                        <hr />
                        @foreach ($isi_komentar as $item)
                        saya pada {{ carbon\carbon::parse($item->created_at)->isoformat('dddd, D MMMM Y') }} menulis:<br />
                        <p>
                            <i>
                                {{ $item->isi_komentar }}
                            </i>
                            <button class="float-end btn btn-danger" wire:click="hapus('{{ $item->id }}')">
                             HAPUS
                            </button>
                        </p>
                        <hr />
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
