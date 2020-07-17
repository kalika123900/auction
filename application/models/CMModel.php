<?php
class CMModel extends CI_Model {

    public function fetchData( $table_name, $where = false, $order_by = false, $limit = false, $offset = false ) {
        $query = $this->db->select( '*' );
        if ( $where != false ) {
            $query =  $query->where( $where );
        }
        if($order_by)
        {
            $query = $query->order_by($order_by,'desc');
        }
        if($limit!=false && $offset != false)
        {
            $query = $query->limit($limit, $offset);
        }
        if($limit!=false)
        {
            $query = $query->limit($limit);
        }
        $query = $query->get( $table_name );

        return $query->result();
    }


    public function deleteOne( $table_name, $where ) {
        $query = $this->db->where( $where )->delete( $table_name );
        if ( $query ) {
            return true;
        } else {
            return false;
        }
    }
    public function updateOne($table_name, $data, $where)
    {
        $sql_query = $this->db->update( $table_name, $data, $where);

        if ( $sql_query ) {
            return true;
        } else {
            $this->session->set_flashdata( 'error', 'Somthing went worng. Error!!' );
            return false;
        }
    }
    public function insertOne($table_name, $data)
    {
        $sql_query = $this->db->insert( $table_name, $data);

        if ( $sql_query ) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    public function joinedData($table,$join,$select,$where=false,$order_by=false){
        $this->db->select($select);    
        $this->db->from($table);
        foreach($join as $key=>$value)
        {
            $this->db->join($key, $value);
        }
        if($where!=false)
        {
            $this->db->where($where);
        }
        if($order_by!=false)
        {
            $this->db->order_by($order_by,'DESC');
        }
        $query = $this->db->get();
     
        return $query->result();
    }
    public function insertOrUpdate($table,$data)
    {   
        $updatedata = [];
        foreach($data as $key=>$value)
        {
            array_push($updatedata,' '.$key.' = "'.$value.'"');
        }
        $sql = $this->db->insert_string($table, $data) . ' ON DUPLICATE KEY UPDATE '.implode($updatedata, ", ");
        $this->db->query($sql);
        $id = $this->db->insert_id();
        return $id;
    }
    public function insertOrUpdateMeta($table,$data)
    {   
        $updatedata = [];
        foreach($data as $key=>$value)
        {
            array_push($updatedata,' '.$key.' = "'.$value.'"');
        }
        $sql = $this->db->insert_string($table, $data) . ' ON DUPLICATE KEY UPDATE '.implode($updatedata, ", ");
        $this->db->query($sql);
        $id = $this->db->insert_id();
        return $id;
    }
    public function searchCourseCount($title){
        $queryString = "SELECT count(cm.id) as video_count FROM course_master cm INNER JOIN subject_master sm on sm.id = cm.subject_id WHERE sm.subject_name LIKE '%$title%' OR cm.title LIKE '%$title%'";
        $query       = $this->db->query($queryString);
        $results     = $query->result();
        return $results;
    }
    public function searchVideoCount($title){
        $queryString = "SELECT count(chm.id) as video_count FROM course_master cm INNER JOIN subject_master sm on sm.id = cm.subject_id LEFT JOIN chapter_master chm ON chm.course_id =  cm.id WHERE sm.subject_name LIKE '%$title%' OR cm.title LIKE '%$title%'";
        $query       = $this->db->query($queryString);
        $results     = $query->result();
        return $results;
    }
    public function search($title,$pageNum=0,$limit=10){
        $queryString = "SELECT cm.id,cm.title,cm.slug,cm.short_description,cm.price,cm.sale_price, cm.featured_image, sm.subject_name as subject_name, count(chm.id) as video_count FROM course_master cm INNER JOIN subject_master sm on sm.id = cm.subject_id LEFT JOIN chapter_master chm ON chm.course_id =  cm.id WHERE sm.subject_name LIKE '%$title%' OR cm.title LIKE '%$title%' GROUP BY cm.id LIMIT $pageNum,$limit";
        $query       = $this->db->query($queryString);
        $results     = $query->result();
        return $results;
    }
    public function purchased_course($user_id){
        $queryString = "SELECT cm.*, pc.id as purchase_id, pc.status as complete_status, pc.is_quiz_attempted as iqa FROM course_master cm INNER JOIN purchased_course pc ON pc.course_id = cm.id WHERE pc.user_id = '$user_id' order by pc.id DESC";
        $query       = $this->db->query($queryString);
        $results     = $query->result();
        return $results;
    }
}

?>