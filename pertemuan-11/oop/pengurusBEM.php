<?php
class pengurusBEM
{
    public $nama;
    public $nim;
    public $angkatan;
    protected $jabatan;
    private $foto;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;
    }

    public function getJabatan()
    {
        return $this->jabatan;
    }

    public function setAngkatan($angkatan)
    {
        $this->angkatan = $angkatan;
    }

    public function getAngkatan()
    {
        return $this->angkatan;
    }
}
