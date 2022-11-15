
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Resep_model"); //load model mahasiswa
        $this->load->library('form_validation');

    }

    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = " Halaman Admin";
        $data["judul_halaman"] = "List Resep";
        // //ambil fungsi getAll untuk menampilkan semua data resep
        $data["data_resep"] = $this->Resep_model->getAll();
        // //load view header.php pada folder views/templates
        $this->load->view('admin_template/V_index', $data);
       
    }

    public function t_add(){
        $data["title"] = " Halaman Add";
        $this->load->view('admin_template/V_add',$data);
    }

    
      //method add digunakan untuk menampilkan form tambah data mahasiswa
      public function add(){
        $image = $this->input->post('image');
        $nama_resep = $this->input->post('nama_resep');
        $deskripsi = $this->input->post('deskripsi');
        $bahan = $this->input->post('bahan');
        $langkah_masak = $this->input->post('langkah_masak');
        $link = $this->input->post('link');

        $data = array(
            'image' => $image,
            'nama_resep' => $nama_resep,
            'deskripsi' => $deskripsi,
            'bahan' => $bahan,
            'langkah_masak' => $langkah_masak,
            'link' => $link,
            
        );
        $this->Resep_model->save($data);
        redirect(base_url(''));
        }

             
        public function edit_data($id){
            $data['title'] = 'Halaman Edit';
            $data['edit'] = $this->Resep_model->getByID($id);
            $this->load->view('admin_template/V_edit',$data);

        }
    
       public function updatedata(){
        $data = $this->Resep_model;
        
            $data->updatedata();
            redirect(base_url(' '));
}
public function delete($id = null){

    if ($this->Resep_model->hapus($id)){
        redirect(base_url(''));
    }
}
    
    }
  
     ?>