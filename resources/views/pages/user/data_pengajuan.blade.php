@foreach ($keluhan as $index => $k)
    <tr>
        {{-- {{ dd($tanggapan) }} --}}
        <td class="text-center">{{ $index + 1 }}</td>
        <td>{{ $pelanggan->nama }}</td>
        <td>{{ $pelanggan->nik }}</td>
        <td>{{ $k->keluhan }}</td>
        <td>{{ $k->nama_kategori }}</td>
        <td>
            @foreach ($tanggapan[$index] as $t)
                {{ $t->tanggapan }} <br>
            @endforeach
        </td>
        <td>
            @if ($k->status_keluhan == 'Diproses')
                <div class="badge badge-primary">
                    {{ $k->status_keluhan }}
                </div>
            @elseif ($k->status_keluhan == 'Pending')
                <div class="badge badge-warning">
                    {{ $k->status_keluhan }}
                </div>
            @else
                <div class="badge badge-success">
                    {{ $k->status_keluhan }}
                </div>
            @endif
        </td>
    </tr>
@endforeach
