<?php

class Crud_model extends CI_Model {

    //show all data
    public function get_entries()
    {
            $query = $this->db->get('crud');
            if(count($query->result()) > 0){
                return $query->result();
            }
    }

    //thêm vào data
    public function insert_entry($data)
    {  
        return $this->db->insert('crud', $data);
    }

    //delete data
    public function delete_entry($id){
        return $this->db->delete('crud', array('id' => $id));
    }

    //edit data
    public function edit_entry($id){
        $this->db->select("*");
        $this->db->from("crud");
        $this->db->where("id", $id);
        $query = $this->db->get();
        if(count($query->result()) > 0){
            return $query->row();
        }
    }

    //update data
    public function update_entry($data)
    {
           return $this->db->update('crud', $data, array('id' => $data['id']));
    }

}

?>