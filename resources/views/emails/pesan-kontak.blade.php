<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Baru dari Website Desa</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f5f0e4; padding: 24px; color:#1e2a20;">
    <table style="max-width:560px; margin:0 auto; background:#fffdf9; border-radius:16px; overflow:hidden; border:1px solid #e0dccf;">
        <tr>
            <td style="background:#1e2a20; padding:20px 28px;">
                <span style="color:#c08326; font-size:12px; letter-spacing:0.1em; text-transform:uppercase;">Formulir Kontak Website</span>
                <h2 style="color:#fff; margin:6px 0 0; font-size:20px;">Pesan Baru Masuk</h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 24px 28px;">
                <p style="margin:0 0 4px; font-size:12px; text-transform:uppercase; letter-spacing:0.08em; color:#8e8370;">Nama</p>
                <p style="margin:0 0 16px; font-size:15px;">{{ $namaPengirim }}</p>

                <p style="margin:0 0 4px; font-size:12px; text-transform:uppercase; letter-spacing:0.08em; color:#8e8370;">Email</p>
                <p style="margin:0 0 16px; font-size:15px;">{{ $emailPengirim }}</p>

                <p style="margin:0 0 4px; font-size:12px; text-transform:uppercase; letter-spacing:0.08em; color:#8e8370;">Pesan</p>
                <p style="margin:0; font-size:15px; line-height:1.6; white-space:pre-line;">{{ $isiPesan }}</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 16px 28px; border-top:1px solid #e0dccf; font-size:12px; color:#8e8370;">
                Balas email ini langsung untuk merespons ke {{ $namaPengirim }} — alamat balasan sudah otomatis mengarah ke {{ $emailPengirim }}.
            </td>
        </tr>
    </table>
</body>
</html>
