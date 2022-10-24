<?php
class Mahasiswa extends CI_Model
{
    function get_mahasiswa()
    {
        $result = $this->db->get('mahasiswa');
        return $result->result();
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}
