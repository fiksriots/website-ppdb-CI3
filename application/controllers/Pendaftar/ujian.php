<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class ujian extends CI_Controller {
   public function index()
   {

            
            $nama_pendaftar=$this->session->userdata('nama');
            $id=$this->db->query("select * from akun where nama='$nama_pendaftar'")->result();
            foreach ($id as $row_id)
            {
                $id_akun=$row_id->id_akun;
            }
            $id2=$this->db->query("select * from akun where nama='$nama_pendaftar'");
            $id3=$id2->num_rows();

            $data['ujian']=$this->db->query("select * from soal WHERE aktif='Y' ORDER BY RAND ()")->result();
            $data['hasil']=$this->db->query("select * from soal WHERE aktif='Y' ORDER BY RAND ()");
            $data['jumlah']= $data['hasil']->num_rows();

            $this->load->view('templates/header_admin');
            $this->load->view('pendaftar/ujian', $data);
            $this->load->view('templates/footer_admin');

   }
    public function dashboard()
    {
        $this->load->view('templates/header_admin');
            $this->load->view('templates/sidebar_pendaftar');
            $this->load->view('pendaftar/ujian_dashboard');
            $this->load->view('templates/footer_admin');
    }
    public function jawab()
    {
       if(isset($_POST['submit']))
       {
            $pilihan=$_POST["pilihan"];
            $id_soal=$_POST["id"];
            $jumlah=$_POST['jumlah'];
            
            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;
            $score1=0;
            $hasil=0;
            
            for ($i=0;$i<$jumlah;$i++)
            {
                //id nomor soal
                $nomor=$id_soal[$i];   
                //jika user tidak memilih jawaban
                if (empty($pilihan[$nomor]))
                {
                    $kosong++;
                }else
                {
                    //jawaban dari user
                    $jawaban=$pilihan[$nomor];
                    //cocokan jawaban user dengan jawaban di database
                    $query=$this->db->query("select * from soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                    $cek=$query->num_rows();
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                } 
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                hasil= 100 / jumlah soal * jawaban yang benar
                */
                $result=$this->db->query("select * from soal WHERE aktif='Y'");
                $jumlah_soal=$result->num_rows();
                $score = 100/$jumlah_soal;
                $score1 = ceil($score*$benar);
            }
            $id_akun=$this->session->userdata('id_akun');
            $queryid=$this->db->query("select * from akun where id_akun='$id_akun'")->result();
            foreach ($queryid as $rowid){
                $id_akun=$rowid->id_akun;
            }

            $querytotal=$this->db->query("select ujian from ujian where id_akun='$id_akun'")->result();
            foreach ($querytotal as $rowtotal)
            {
                $nilaiujian=$rowtotal->ujian;
                
            }
            $data_ujian = array(
                'id_akun' => $id_akun,
                'ujian' => $score1
            );
            $data = array(
               
                'total' => $score1 //'ujian' => $score,
            );
            $where = array(
                'id_akun' => $id_akun
            );
             $query=$this->db->query("select * from ujian where id_akun='$id_akun'");
             $cekujian=$query->num_rows();

             
            if ($cekujian>0)
            {   
                $this->ppdb_model->insert_data($data_ujian,'ujian');
                $data['score']=$hasil;
                $data['benar']=$benar;
                $data['salah']=$salah;
                $data['kosong']=$kosong;
                $data['score']=$score1;
                
                $this->load->view('templates/header_admin');
                $this->load->view('templates/sidebar_pendaftar');
                $this->load->view('pendaftar/jawab',$data);
                $this->load->view('templates/footer_admin');
                $result =$this->db->where('id_akun',$id_akun)->limit(1)->get('ujian');
                //var_dump($result);
                if($result->num_rows() > 0){
                    $cek = $result->row();
                }else{
                }
                $this->session->set_userdata('id_ujian',$cek->id_ujian);
                $data=array(
                    'id_ujian' => $cek->id_ujian
                );
                $this->ppdb_model->update_data('akun', $data, $id_akun);
            }
            else 
            {
                $this->ppdb_model->insert_data($data_ujian,'ujian');
                $data['benar']=$benar;
                $data['salah']=$salah;
                $data['kosong']=$kosong;
                $data['score']=$score1;
                //var_dump($result);
                if($result->num_rows() > 0)
                {
                    $cek = $result->row();
                }else
                {
                }
                $this->session->set_userdata('id_ujian',$cek->id_ujian);
                $data=array(
                    'id_ujian' => $cek->id_ujian
                );
                $this->ppdb_model->update_data('akun', $data, $id_akun);
                $this->load->view('templates/header_admin');
                $this->load->view('templates/sidebar_pendaftar');
                $this->load->view('pendaftar/dashboard',$data);
                $this->load->view('templates/footer_admin');
               
                echo "else";
                //}
                //Lakukan Penyimpanan Kedalam Database
      
            }
        }
    }
 public function nilai()
    {
        $id=$this->session->userdata('id_ujian');
        $data['detail'] = $this->ppdb_model->ambil_id_ujian($id);
        $this->load->view('templates/header_admin');
        $this->load->view('templates/sidebar_pendaftar');
        $this->load->view('pendaftar/nilai',$data);
        $this->load->view('templates/footer_admin');
    } 
}