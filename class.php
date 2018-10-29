<?php
class Kalkulator{
    private $conn;

    public function Kalkulator(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "oop";       
        $this->conn = mysqli_connect($servername, $username, 
                           $password, $db);                        
    }    

    public function tambah(){
        $angka1 = $_POST['input1'];
        $angka2 = $_POST['input2'];
        $sql    = "INSERT INTO siswa(nama, nim) 
                    VALUES ('$angka1','$angka2')";
        mysqli_query($this->conn, $sql);        
    }    
    public function kurang(){        
        $angka1 = $_POST['input1'];
        $angka2 = $_POST['input2'];
        $sql    = "DELETE FROM siswa WHERE nim=$angka2
        ";        
        mysqli_query($this->conn, $sql);
    }
    public function bagi(){
        $sql    = "SELECT * FROM siswa";        
        return mysqli_query($this->conn, $sql);

    }
    function edit($nim){
        $data = mysql_query("select * from siswa where nim='$nim'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($nama,$nim,$tgl_lahir){
        mysql_query("update siswa set nama='$nama', nim='$nim', tgl_lahir='$tgl_lahir' where nim='$nim'");
    }
}
$operasi = $_POST["operasi"];
$kalkulator = new Kalkulator();
if($operasi == "+")
    $kalkulator->tambah();
if($operasi == "-")
    $kalkulator->kurang();
if($operasi == "/"){
    $result = $kalkulator->bagi();
    require_once("data.php");
}
    

?>
