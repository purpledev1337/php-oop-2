<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>

        <?php

        /**
         * 
         *      Definire classe Persona:
         *          - ATTRIBUTI (private):
         *              - nome
         *              - cognome
         *              - dataNascita (stringa)
         *          - METODI:
         *              - costruttore che accetta nome e cognome
         *              - setter/getter per ogni variabile
         *              - printFullPerson: che stampa "nome cognome: dataNascita"
         *              - toString: che ritorna "nome cognome: dataNascita"
         * 
         * 
         *      Definire classe Employee che eredita da Persona:
         *          - ATTRIBUTI (private):
         *              - stipendio
         *              - dataAssunzione
         *          - METODI:
         *              - costruttore che accetta nome, cognome e stipendio
         *              - setter/getter per variabili 
         *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
         *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
         * 
         */

     class Person {

        private $name;
        private $surname;
        private $birth;

        public function __construct($name, $surname) {
            
            $this -> name = $name;
            $this -> surname = $surname;
        }

        public function setName($name) {

            $this -> name = $name;
        }

        public function setSurname($surname) {

            $this -> surname = $surname;
        }

        public function setBirth($birth) {

            $this -> birth = $birth;
        }

        public function getName() {

            return $this -> name;
        }

        public function getSurname() {

            return $this -> surname;
        }

        public function getBirth() {

            return $this -> birth;
        }

        public function printFullPerson() {

            return $this -> getName() . ' '
            . $this -> getSurname() . ': '
            . $this -> getBirth();
        }

        public function __toString() {

            return $this -> printFullPerson();
        }
    };

    $p1 = new Person($name, $surname);
    $p1 -> setName("Marco");
    $p1 -> setSurname("Rossi");
    $p1 -> setBirth("15/03/2000");

    $p2 = new Person($name, $surname);
    $p2 -> setName("Mario");
    $p2 -> setSurname("Bianchi");
    $p2 -> setBirth("12/08/1980");

    $p3 = new Person($name, $surname);
    $p3 -> setName("Maria");
    $p3 -> setSurname("Verdi");
    $p3 -> setBirth("20/05/1990");

    echo $p1 . "<br>" . $p2 . "<br>" . $p3;

    class Employee extends Person {

        private $salary;
        private $hiringDate;

        public function setSalary($salary) {

            $this -> salary = $salary;
        }

        public function setHiringDate($hiringDate) {

            $this -> hiringDate = $hiringDate;
        }

        public function getSalary() {

            return $this -> salary;
        }

        public function getHiringDate() {

            return $this -> hiringDate;
        }

        public function __construct($name, $surname, $salary) {
            
            return parent::__construct($name, $surname);
            $this -> salary = $salary;
        }

        public function printFullEmployee() {

            return $this -> getName() . ' '
            . $this -> getSurname() . ': €'
            . $this -> getSalary() . " ("
            . $this -> getHiringDate() . ")";
        }

        public function __toString() {

            return $this -> printFullEmployee();
        }
    };
    
    echo "<br>" . "----------" . "<br>";

    $e1 = new Employee($p1 -> getName(), $p1 -> getSurname(), $salary);
    $e1 -> setSalary(1200);
    $e1 -> setHiringDate("23/05/2007");

    $e2 = new Employee($p2 -> getName(), $p2 -> getSurname(), $salary);
    $e2 -> setSalary(1300);
    $e2 -> setHiringDate("13/07/2005");

    $e3 = new Employee($p3 -> getName(), $p3 -> getSurname(), $salary);
    $e3 -> setSalary(1400);
    $e3 -> setHiringDate("03/09/2003");

    echo $e1 . "<br>" . $e2 . "<br>" . $e3;
    
?>

    </div>

<style>
    * {
        font-size: 1.5em;
    }

</style>
    
</body>
</html>