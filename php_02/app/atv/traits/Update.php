<?php

    namespace atv\traits;

    trait Update {

        public function update(array $fieldsAndValues) {
            
            $id = $fieldsAndValues['id'];
            $nome = $fieldsAndValues['nome'];
            $turma = $fieldsAndValues['turma'];

            try {
                $sql = "UPDATE {$this->table} SET nome='$nome', turma='$turma' WHERE id=$id"; 
                
                $stmt = $this->connection->prepare($sql);
                $stmt->execute(); 
            
            } catch(\PDOException $e) {
                var_dump($e->getMessage());
            }

            /* try {
                $id = $dados['id'];
                $nome = $dados['nome'];
                $turma = $dados['turma'];
    
                $sql = "UPDATE students SET nome='$nome', turma='$turma' WHERE id=$id";
    
                $stmt = $this->connection->prepare($sql);
                $stmt->execute();  
                    
            } catch(\PDOException $e) {
                var_dump($e->getMessage());
            } */

        }
    }