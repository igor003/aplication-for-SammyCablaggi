<?php
class Terminal_Model extends CI_Model{
    function get_oll(){
        $presete = array();
        $query = $this->db->get('table_terminal');
        foreach ($query->result_array() as $row)
        {
            $presete[] = $row;
        }
        return $presete;
    }
    function delete($id){
        $this->db->delete('table_terminal', array('id' => $id));
    }
    function update($updated_terminal, $id){
        $this->db->where('id', $id);
        $this->db->update('table_terminal', $updated_terminal);
    }
    function get_by_id($id){
        $query = $this->db->get_where('table_terminal', array('id' => $id));
        return $query->row_array();
    }
    function add($terminal){
        $this->db->insert('table_terminal', $terminal);
    }
}