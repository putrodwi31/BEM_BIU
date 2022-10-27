<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    public function getPost()
    {
        $query = "SELECT `artikel`.*, `blog_kategori`.`nama`
                FROM `artikel` JOIN `blog_kategori`
                ON `artikel`.`kategori` = `blog_kategori`.`id`        
                ";
        return $this->db->query($query)->result_array();
    }
    public function getPostWhere()
    {
        $query = "SELECT `artikel`.*, `blog_kategori`.`nama`, `user`.`name` 
                FROM `artikel` 
                JOIN `user` ON `artikel`.`penulis` = `user`.`id`
                JOIN `blog_kategori` ON `artikel`.`kategori` = `blog_kategori`.`id` 
                WHERE `status` = '1'      
                ";
        return $this->db->query($query)->result_array();
    }

    public function getArt($slug)
    {
        $query = "SELECT `artikel`.*, `user`.`name`, `user`.`deskripsi`, `user`.`image`
                FROM `artikel` JOIN `user`
                ON `artikel`.`penulis` = `user`.`id`
                WHERE `slug` = '$slug' and `status` = '1'
                ";
        return $this->db->query($query)->row_array();
    }

    public function getPostKat()
    {
        $query = "SELECT `artikel`.*, `blog_kategori`.`nama`, `user`.`name` 
                FROM `artikel` JOIN `blog_kategori` ON `artikel`.`kategori` = `blog_kategori`.`id`
                JOIN `user` ON `artikel`.`penulis` = `user`.`id`
                WHERE `artikel`.`kategori` = 2 
                LIMIT 3       
                ";
        return $this->db->query($query)->result_array();
    }

    public function getKategori()
    {
        return $this->db->get('blog_kategori')->result_array();
    }
    public function countPostKat($id)
    {
        return $this->db->get_where('artikel', ['kategori' => $id, 'status' => 1])->num_rows();
    }
    public function getKomen($id)
    {
        return $this->db->get_where('blog_komentar', ['id_artikel' => $id])->result_array();
    }
    public function getnumKomen($id)
    {
        return $this->db->get_where('blog_komentar', ['id_artikel' => $id])->num_rows();
    }
    public function getTags($id)
    {
        $query = "SELECT `artikel`.`tag`, `artikel`.`id`FROM `artikel`
                WHERE `id` = $id
        ";
        return $this->db->query($query)->result_array();
    }
    public function getPostPopuler()
    {
        $query = "SELECT `artikel`.*, `blog_kategori`.`nama` 
                FROM `artikel` JOIN `blog_kategori`
                ON `artikel`.`kategori` = `blog_kategori`.`id` 
                WHERE `status` = 1
                ORDER BY `artikel`.`dilihat` DESC    
                LIMIT 3           
                ";
        return $this->db->query($query)->result_array();
    }
    public function getPostTerbaru()
    {
        $query = "SELECT `artikel`.*, `blog_kategori`.`nama` 
                FROM `artikel` JOIN `blog_kategori`
                ON `artikel`.`kategori` = `blog_kategori`.`id` 
                WHERE `status` = 1
                ORDER BY `artikel`.`id` DESC    
                LIMIT 1           
                ";
        return $this->db->query($query)->row_array();
    }

    public function getEditPost($id)
    {
        return $this->db->get_where('artikel', ['id' => $id])->row_array();
    }

    public function tambah_views($slug)
    {
        // Ambil data artikel
        $this->db->where('slug', $slug);
        $this->db->select('dilihat');
        $count = $this->db->get('artikel')->row();
        // tambah satu
        $this->db->where('slug', $slug);
        $this->db->set('dilihat', ($count->dilihat + 1));
        $this->db->update('artikel');
    }
    public function getPenulis($id)
    {
        return  $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function getkat($id)
    {
        return  $this->db->get_where('blog_kategori', ['id' => $id])->row_array();
    }
}
