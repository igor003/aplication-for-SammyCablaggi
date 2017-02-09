<?php
class Preseta_Model extends CI_Model{
    function get_oll(){
        $presete = array();
        $query = $this->db->get('nr_presetei');
        foreach ($query->result_array() as $row)
        {
            $presete[] = $row;
        }
        return $presete;
    }
    function delete($id){
        $this->db->delete('nr_presetei', array('id' => $id));
    }
    function update($updated_preseta, $id){
        $this->db->where('id', $id);
        $this->db->update('nr_presetei', $updated_preseta);
    }
    function get_by_id($id){
        $query = $this->db->get_where('nr_presetei', array('id' => $id));
        return $query->row_array();
    }
    function add($preseta){
        $this->db->insert('nr_presetei', $preseta);
    }
}