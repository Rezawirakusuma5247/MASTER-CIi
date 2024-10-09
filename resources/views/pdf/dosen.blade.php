<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <style>
        /* Add some styling for the PDF */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Dosen</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Tanggal Mulai Tugas</th>
                <th>Jenjang Pendidikan</th>
                <th>Bidang Keilmuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($utp as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nidn }}</td>
                <td>{{ $item->nama_dosen }}</td>
                <td>{{ $item->tgl_mulai_tugas }}</td>
                <td>{{ $item->jenjang_pendidikan }}</td>
                <td>{{ $item->bidang_keilmuan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
