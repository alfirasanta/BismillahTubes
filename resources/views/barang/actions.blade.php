<div class="d-flex">
    <a href="{{ route('barang.show', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi bi-info-square-fill"></i>
    </a>
    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-pencil-fill"></i></a>
    {{-- <a href=" {{route('barangmasuk.create', $barang->id)}}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-plus-circle-fill"></i></a> --}}
    <div>
        <form action="{{ route('barang.destroy', ['barang' => $barang->id]) }}" method="POST" >
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="{{ $barang->nama_barang.' '.$barang->jenis->jenis }}" >
                <i class="bi bi-trash-fill"></i>
            </button>
        </form>
    </div>
</div>
