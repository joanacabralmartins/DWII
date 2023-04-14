<?php

    namespace atv\controllers;

    use atv\database\models\Student;

    class StudentController {

        private $student;

        public function __construct() {
            $this->student = new Student();
        }

        public function read() {
            return json_encode($this->student->all());
        }

        public function monitor() {
            return json_encode($this->student->monitor());
        }

        public function create(array $data) {

            $response = $this->student->create(
                array(
                    'nome' => $data['nome'],
                    'turma' => $data['turma']
                )
            );

            return json_encode($response);
        }

        public function update(array $data) {

            $this->student->update(
                array(
                    'id' => $data['id'],
                    'nome' => $data['nome'],
                    'turma' => $data['turma']
                )
            );
        }

        public function delete($data) {
        
        }
    }