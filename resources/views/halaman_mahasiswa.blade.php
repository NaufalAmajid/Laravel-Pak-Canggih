<table border="1">

    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Program Studi</th>
    </tr>

    @foreach ($data_mahasiswa as $m)
    <tr>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->nama }}</td>
        <td>{{ $m->alamat }}</td>
        <td>{{ $m->program_studi }}</td>
    </tr>
    @endforeach

</table>
