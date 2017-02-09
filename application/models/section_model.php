<?php
class Section_Model extends CI_Model{

    function get_oll(){
        $sez = array();
        $query = $this->db->get('section');
        foreach ($query->result_array() as $row)
        {
            $sez[] = $row;
        }
        return $sez;
    }
    function delete($id){
        $this->db->delete('section', array('id' => $id));
    }
    function update($updated_sez, $id){
        $this->db->where('id', $id);
        $this->db->update('section', $updated_sez);
    }
    function get_by_id($id){
        $query = $this->db->get_where('section', array('id' => $id));
        return $query->row_array();
    }
    function add($sez){
        $this->db->insert('section', $sez);
    }
}