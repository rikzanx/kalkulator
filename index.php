<?php 
/**
 * @desc class ini digunakan untuk menyimpan fungsi untuk kalkulato
 * @author Muhammad Rikzan
 * @version 1
 * @date : September 2020
 */
class Kalkulator
{
	var $number1;
	var $number2;
	/**
	* @desc method construct yang digunakan untuk mengisi variable yang ada di class
	* @param $number1 untuk mengisi number1
	* @param $number2 untuk mengisi number2
	* @return tidak memiliki return
	*/
	function __construct($number1,$number2)
	{
		$this->number1 = $number1;
		$this->number2 = $number2;
	}
	/**
	* @desc method yang digunakan untuk perkalian
	* @return $result dari hasil perkalian
	*/
	function perkalian(){
		$result = $this->number1 * $this->number2;
		return $result;
	}
	/**
	* @desc method yang digunakan untuk pembagian
	* @return $result dari hasil pembagian
	*/
	function pembagian(){
		$result = $this->number1 / $this->number2;
		return $result;
	}
	/**
	* @desc method yang digunakan untuk pertambahan
	* @return $result dari hasil pertambahan
	*/
	function pertambahan(){
		$result = $this->number1 + $this->number2;
		return $result;
	}
	/**
	* @desc method yang digunakan untuk pengurangan
	* @return $result dari hasil pengurangan
	*/
	function pengurangan(){
		$result = $this->number1 - $this->number2;
		return $result;
	}
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
  </head>
  <body>

    <div id="main">
      <div class="left-wrapper">
        <div class="box">
          <h1>Kalkulator</h1>
          <form method="GET" action="#">
            <div class="form-group">
              <label for="number1">Bilangan 1</label>
              <input type="number" class="form-control" id="number1" name="number1" placeholder="0" value="1">
            </div>
            <div class="form-group">
              <label for="number2">Bilangan 2</label>
              <input type="number" class="form-control" id="number2" name="number2" placeholder="0" value="1">
            </div>
            <div class="btn-wrapper d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-submit" name="submit">Hitung</button>
            </div>
          </form>
        </div>
      </div>
      <div class="right-wrapper">
        <div class="box">
          <h1>Hasil:</h1>
          <?php
          if(isset($_GET['number1']) && isset($_GET['number2'])){
           //masukkan bilangan pertama
           $number1 = $_GET['number1'];
           //masukkan bilangan kedua
           $number2 = $_GET['number2'];
           $kalkulator = new Kalkulator($number1,$number2);//menginisialiasi objek dari class kalkulator
          ?>
            <p>Hasil pertambahan adalah: <?php echo $kalkulator->pertambahan(); ?></p>
            <p>Hasil pengurangan adalah: <?php echo $kalkulator->pengurangan(); ?></p>
            <p>Hasil perkalian adalah: <?php echo $kalkulator->perkalian(); ?></p>
            <p>Hasil pembagian adalah: <?php echo $kalkulator->pembagian(); ?></p>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>