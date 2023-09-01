SELECT
  y.mhs_nama
FROM tb_mahasiswa_nilai x
JOIN tb_mahasiswa y ON x.mhs_id = y.mhs_id
JOIN tb_matakuliah z ON x.mk_id = z.mk_id
WHERE z.mk_kode = 'MK303'
ORDER BY x.nilai DESC
LIMIT 1