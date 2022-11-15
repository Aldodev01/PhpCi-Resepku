<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep_model extends CI_Model
{
    private $table = 'resep';


    public function rules()
    {
        return [
            [
                'field' => 'image',  //samakan dengan atribute name pada tags input
                'label' => 'image',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'nama_resep',
                'label' => 'nama_resep',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'deskripsi',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'bahan',
                'label' => 'bahan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'langkah_masak',
                'label' => 'langkah_masak',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'link',
                'label' => 'link',
                'rules' => 'trim|required'
            ]
        ];
    }

   
    public function getById($id){
        return $this->db->get_where($this->table,['id'=>$id])->row();
    }

  //menampilkan semua data resep
  public function getAll()
  {
      $this->db->from($this->table);
      $this->db->order_by("id", "desc");
      $query = $this->db->get();
      return $query->result();
      //fungsi diatas seperti halnya query 
      //select * from mahasiswa order by id,desc
  }

   //menyimpan data mahasiswa
   public function save($data){
    $this->db->insert($this->table, $data);
}
public function updatedata(){
    $post = $this->input->post();
    $this->id = $post['id'];
    $this->image = $post['image'];
    $this->nama_resep = $post['nama_resep'];
    $this->deskripsi = $post['deskripsi'];
    $this->bahan = $post['bahan'];
    $this->langkah_masak = $post['langkah_masak'];
    $this->link = $post['link'];

    $this->db->update($this->table, $this, array('id' => $post['id']));
}

// public function hapus($id){
//     return $this->db->delete($this->table, array('id_pemesanan' => $id));
// }


public function hapus($id){
    return $this->db->delete($this->table, array('id' => $id));
}
}

?>