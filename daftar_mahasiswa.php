<?php
// Contoh data mahasiswa, bisa diganti dengan data dari database
$mahasiswa = [
    ["nama" => "Arya Winata", "email" => "Arya@email.com", "jurusan" => "Sistem Informasi"],
    ["nama" => "Stanislaus Darren Revaldo", "email" => "Darren@email.com", "jurusan" => "Teknik Informatika"],
    ["nama" => "Lionak Messi", "email" => "Mesii@email.com", "jurusan" => "Manajemen"],
];
?>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= htmlspecialchars($mhs["nama"]) ?></td>
            <td><?= htmlspecialchars($mhs["email"]) ?></td>
            <td><?= htmlspecialchars($mhs["jurusan"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
