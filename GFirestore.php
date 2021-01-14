<?php

require_once './vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Firestore\FieldValue;

class Firestore{

    protected $db;
    protected $name;
    
    public function __construct(string $collection){
        $this->db = new FirestoreClient([
            'projectId'=> 'fyp-cms'
        ]);
        $this->name=$collection;
    }

    public function getDocument(string $name){

        try {
            if($this->db->collection($this->name)->document($name)->snapshot()->exists()){
                return $this->db->collection($this->name)->document($name)->snapshot()->data();
        }
        else{
            throw new Exception('Document not found.');
        }

        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }

    public function getAllDocuments(){

        $arr=[];
        $docs=$this->db->collection($this->name)->documents()->rows();
        if(!empty($docs)){
            foreach($docs as $value){
             $arr[]= $value->data();
            }
        }
        return $arr;
    }


    // for compound queries
    public function getCompositeWhere(string $f1,string $f2,string $op1,string $op2,$val1,$val2){
        $arr=[];
        $query=$this->db->collection($this->name)
                ->where($f1,$op1,$val1)
                ->where($f2,$op2,$val2)
                ->documents()
                ->rows();
        if(!empty($query)){
            foreach ($query as $value){
                $arr[] = $value->data();
            }
        }
        return $arr;
    }

    // Don't know why i created this in the first place :)
    public function getWhere(string $field, string $operator, $value)
    {
        $arr = [];
        $query = $this->db->collection($this->name)->where($field, $operator, $value)->documents()->rows();
        if (!empty($query)) {
            foreach ($query as $value) {
                $arr[] = $value->data();
            }
        }
        return $arr;
    }

    // Creates a document in the specified collection at root level. If $data is empty (by default), a null document is created. 
    // Else, a document will be created along with its data
    public function createDocument(string $name,array $data=[]){
        try {
            if(!($this->db->collection($this->name)->document($name)->snapshot()->exists())){
                    $this->db->collection($this->name)->document($name)->set($data);
                    return true;       
        }
            else{
                throw new Exception('Document exists.');
            }

        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }

    // Updates field values, and if the field doesn't exist, it will be created in the document.
    public function updateDocument(string $docName,array $newData){

        try {
            if($this->db->collection($this->name)->document($docName)->snapshot()->exists()){
                $this->db->collection($this->name)->document($docName)->update($newData);
                return true;
        }
        else{
            throw new Exception('Document not found.');
        }

        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }

        public function createSubCollection(string $name,string $doc_name,string $sub_doc,array $data=[]){
            try {
                $this->db->collection($this->name)->document($doc_name)->collection($name)->document($sub_doc)->set($data);
                return true;
            } catch (Exception $exception) {
                return $exception->getMessage();
            }
        }

        // Drops a document
        public function dropDocument(string $docName){
            try {
                if($this->db->collection($this->name)->document($docName)->snapshot()->exists()){
                    $this->db->collection($this->name)->document($docName)->delete();
                    return true;
            }
            else{
                throw new Exception('Document not found.');
            }

            } 
            catch (Exception $exception) {
                return $exception->getMessage();
            }

        }


       




        // Deletes specified collection and its documents
        public function dropCollection(string $collectionName){

            try {

              $documents= $this->db->collection($collectionName)->limit(4)->documents();
              while (!$documents->isEmpty()) {
                  foreach ($documents as $item){
                      $item->reference()->delete();
                    }
                }
                return true;
            } 
            catch (Exception $exception) {
                return $exception->getMessage();
            }
        }

        // Deletes specified field in specified document
        public function deleteFields(string $docName,string $field){

            try {
                if($this->db->collection($this->name)->document($docName)->snapshot()->exists()){
                    $this->db->collection($this->name)->document($docName)->update([
                        ["path"=>$field,
                         "value"=>FieldValue::deleteField()]
                    ]);
                    return true;
            }
            else{
                throw new Exception('Document not found.');
            }

            } catch (Exception $exception) {
                return $exception->getMessage();
            }

        }

        // Retrieves field values in a document
        // Most redundant function ever, but kinda useful in a way...eventually
        public function retrieveField(string $docName,string $field){
            try {
                if($this->db->collection($this->name)->document($docName)->snapshot()->exists()){
                    $result= ($this->db->collection($this->name)->document($docName)->snapshot()->data());
                    return $result[$field];
            }
            else{
                throw new Exception('Document not found.');
            }

            } catch (Exception $exception) {
                return $exception->getMessage();
            }
        }

        }

