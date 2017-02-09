<?php
class Miniaplicator_Model extends CI_Model{
    function get_oll(){
        $mini = array();
        $query = $this->db->get('miniaplicators');
        foreach ($query->result_array() as $row)
        {
            $mini[] = $row;
        }
        return $mini;
    }
    function delete($id){
        $this->db->delete('miniaplicators', array('id' => $id));
    }
    function update($updated_mini, $id){
        $this->db->where('id', $id);
        $this->db->update('miniaplicators', $updated_mini);
    }
    function get_by_id($id){
        $query = $this->db->get_where('miniaplicators', array('id' => $id));
        return $query->row_array();
    }
    function add($mini){
        $this->db->insert('miniaplicators', $mini);
    }
}