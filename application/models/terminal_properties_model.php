<?php
class Terminal_Properties_Model extends CI_Model{
    function get_oll(){
        $terminal_properties = array();

        $this->db->select('tp.id, tp.calibrarea_sus, tp.calibrarea_jos, tt.Terminal, ts.sez , tnp.nr_presetei, tm.nr_mini');
        $this->db->from('terminal_properties tp');
        $this->db->join('table_terminal tt', 'tp.id_terminal = tt.id');
        $this->db->join('section ts ', 'tp.id_sez = ts.id');
        $this->db->join('nr_presetei tnp ', 'tp.id_nr_presetei = tnp.id');
        $this->db->join('miniaplicators tm ', 'tp.id_nr_mini = tm.id');
        $query = $this->db->get();

        foreach ($query->result_array() as $row)
        {
            $terminal_properties[] = $row;
        }
        return $terminal_properties;
    }
    function get_by_id($id){
        $query = $this->db->get_where('terminal_properties', array('id' => $id));
        return $query->row_array();
    }
    function delete($id){
        $this->db->delete('terminal_properties', array('id' => $id));
    }
    function update($updated_terminal, $id){
        $this->db->where('id', $id);
        $this->db->update('terminal_properties', $updated_terminal);
    }
    function insert($data){
        $this->db->insert('terminal_properties', $data);
    }
}