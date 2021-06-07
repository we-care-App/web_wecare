<?php 
    class Api_m extends CI_Model{

        public function get_users_app($id = null){
            if($id === null){
                return $this->db->get('users-app')->result_array();
            }else{
                return $this->db->get_where('users-app',['id'=>$id])->result_array();
            }
        }

        public function insert_users_app($data_users){
            $this->db->insert('users-app',$data_users);
            return $this->db->affected_rows();
        }

	public function CountPengaduan($id){
            $query = $this->db->get_where('pengaduan',['id_user'=>$id]);
            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{
                return 0;
            }
        }

	public function pengaduanOk($id){
            $query = $this->db->get_where('pengaduan',['id_user'=>$id,'status'=>'Ok']);
            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{
                return 0;
            }
        }

	public function pengaduanNotOk($id){
            $query = $this->db->get_where('pengaduan',['id_user'=>$id,'status'=>'Not Ok']);
            if($query->num_rows()>0)
            {
                return $query->num_rows();
            }else{
                return 0;
            }
        }

    }




?>
