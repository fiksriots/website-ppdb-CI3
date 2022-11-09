<?php
Class Laporanpdf extends CI_Controller
{
    
    function __construct() 
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index()
    {
      $id=$this->session->userdata('id_akun');
      $data = $this->db->query("SELECT * FROM data_diri where id_akun = '$id'");
  foreach ($data->result_array() as $data_diri) 
        {
            $pdf = new FPDF('P','mm','A4');
            // membuat halaman baru
            $pdf->AddPage();
            $pdf->Image('baruna-wati.jpg',10,10,25,25);
            // setting jenis font yang akan digunakan
            $pdf->SetFont('Times','B',16);
            // mencetak string 
            
            $pdf->Cell(0,5,'SMK BARUNAWATI BIRU SURABAYA',0,1,'C');
            $pdf->Cell(0,5,'TERAKREDITASI A',0,1,'C');
            $pdf->SetFont('Times','',12);
            $pdf->Cell(0,5,'NSS 344056002044 NDS 4305300201 NPSN 20539249',0,1,'C');
            $pdf->Cell(0,5,'Jl. Perak Barat 173, Telp/Fax, 031-3291312, Surabaya – 60165',0,1,'C');
            $pdf->Cell(0,5,'E-mail : smkbarunawati@yahoo.co.id',0,1,'C');
            $pdf->SetLineWidth(1);
            $pdf->Line(10,36,198,36);
            $pdf->SetLineWidth(0);
            $pdf->Line(10,37,198,37);
            $pdf->Ln(4);
            $pdf->SetFont('Times','B',14);
            $pdf->Cell(0,5,'FORMULIR PPDB',0,1,'C');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->SetFont('Times','B',12);
            $pdf->Cell(0,5,'I.  Calon Siswa',0,1,'L');
            $pdf->SetFont('Times','',12);

            $pdf->Cell(70,5,'   01. Nama Siswa',0,0,'L');
            $pdf->Cell(2,5,': ',0,0,'L');
            $pdf->Cell(300,5,$data_diri['nama_lengkap'],0,1,'L');
            $pdf->Cell(70,5,'   02. NIK',0,0,'L');
            $pdf->Cell(2,5,': ',0,0,'L');
            $pdf->Cell(300,5,$data_diri['nik'],0,1,'L');
            $pdf->Cell(70,5,'   03. Jenis Kelamin',0,0,'L');
            $pdf->Cell(2,5,': ',0,0,'L');
            $pdf->Cell(300,5,$data_diri['gender'],0,1,'L');
            function tanggal_indo($tanggal)
            {           
                $bulan = array (1 =>   'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );
                $split    = explode('-', $tanggal);
                $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
                return $tgl_indo;
            }
            $pdf->Cell(70,5,'   04. Tempat / Tanggal Lahir',0,0,'L');
            $pdf->Cell(2,5,': ',0,0,'L');
            $pdf->Cell(45,5,$data_diri['tempat_lahir'].','.tanggal_indo($data_diri['tgl_lahir']),0,1,'L');
            $pdf->Cell(70,5,'   05. Yatim/piatu/yatim piatu',0,0,'L');
            $pdf->Cell(2,5,': ',0,0,'L');
            $pdf->Cell(300,5,$data_diri['status_anak'],0,1,'L');
            $pdf->Cell(70,5,'   06. Domisili',0,0,'L');
            $pdf->Cell(2,5,': ',0,0,'L');
            $pdf->Cell(300,5,$data_diri['alamat'],0,1,'L');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->SetFont('Times','B',12);
            $pdf->Cell(0,5,'II.  Orang Tua / Wali',0,1,'L');
            $pdf->SetFont('Times','',12);
            $pdf->Cell(70,5,'   01. Nama Orang Tua',0,0,'L');
            $pdf->Cell(25,5,': Ayah    : ',0,0,'L');
            $pdf->Cell(45,5,$data_diri['nama_ayah'],0,0,'L');
            $pdf->Cell(25,5,' Ibu      :',0,0,'L');
            $pdf->Cell(45,5,$data_diri['nama_ibu'],0,1,'L');
            $pdf->Cell(70,5,'   02. Pendidikan Orang Tua',0,0,'L');
            $pdf->Cell(25,5,': Ayah    : ',0,0,'L');
            $pdf->Cell(45,5,$data_diri['pendidikan_ayah'],0,0,'L');
            $pdf->Cell(25,5,' Ibu      :',0,0,'L');
            $pdf->Cell(45,5,$data_diri['pendidikan_ibu'],0,1,'L');
            $pdf->Cell(70,5,'   03. Pekerjaan Orang Tua',0,0,'L');
            $pdf->Cell(25,5,': Ayah    : ',0,0,'L');
            $pdf->Cell(45,5,$data_diri['pekerjaan_ayah'],0,0,'L');
            $pdf->Cell(25,5,' Ibu      :',0,0,'L');
            $pdf->Cell(45,5,$data_diri['pekerjaan_ibu'],0,1,'L');
            $pdf->Cell(70,5,'   04. Penghasilan Orang Tua',0,0,'L');
            $pdf->Cell(10,5,': ',0,0,'L');
            $penghasilanortu = $data_diri['penghasilan_ayah']+$data_diri['penghasilan_ibu'];
            $pdf->Cell(300,5,$penghasilanortu,0,1,'L');
            $pdf->Cell(70,5,'   05. Alamat Orang Tua',0,0,'L');
            $pdf->Cell(10,5,': ',0,0,'L');
            $pdf->Cell(100,5,$data_diri['alamat_ayah'],0,1,'L');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->SetFont('Times','B',12);
            $pdf->Cell(0,5,'III.  Asal Sekolah',0,1,'L');
            $pdf->SetFont('Times','',12);
            $pdf->Cell(70,5,'   01. Dari Sekolah',0,0,'L');
            $pdf->Cell(2,5,': ',0,0,'L');
            $pdf->Cell(300,5,$data_diri['asal_sekolah'],0,1,'L');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->SetFont('Times','B',12);
            $pdf->Cell(0,5,'IV.  Lampiran',0,1,'L');
            $pdf->SetFont('Times','',12);
            $pdf->Cell(140,5,'   01. Foto Copy Ijazah yang dilegalisir',0,0,'L');
            $pdf->Cell(70,5,': 3 Lembar ',0,1,'L');
            $pdf->Cell(140,5,'   02. Foto Copy SKHUN yang dilegalisir',0,0,'L');
            $pdf->Cell(70,5,': 3 Lembar ',0,1,'L');
            $pdf->Cell(140,5,'   03. Foto Copy Rapot kelas IX',0,0,'L');
            $pdf->Cell(70,5,': 3 Lembar ',0,1,'L');
            $pdf->Cell(140,5,'   04. Foto Copy Kartu Keluarga (KK)',0,0,'L');
            $pdf->Cell(70,5,': 3 Lembar ',0,1,'L');
            $pdf->Cell(140,5,'   05. Pas Foto terbaru ukuran 3 x 4',0,0,'L');
            $pdf->Cell(70,5,': 4 Lembar ',0,1,'L');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->Cell(140,5,'',0,0,'L');
            $pdf->Cell(70,5,'Surabaya,'.date("d-m-Y"),0,1,'L');
            $pdf->Cell(140,5,'',0,0,'L');
            $pdf->Cell(70,5,'Nama Calon Siswa/i ',0,1,'L');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->Cell(300,5,'',0,1,'L');
            $pdf->Cell(140,5,'',0,0,'L');
            $pdf->SetFont('Times','BU',12);
            $pdf->Cell(70,5,$data_diri['nama_lengkap'],0,1,'L');
        }
        $pdf->Output();
    }
}
?>