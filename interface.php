<?php
	interface Negara  {
		public function Menyapa();
	}

	class Indonesia implements negara {
		public function Menyapa() {
			return " Halo</br>";
		}
	}

	class Inggris implements negara {
		public function Menyapa() {
			return "Hello</br>";
		}
	}

	class Spanyol implements negara {
		public function Menyapa() {
			return "Hola</br>";
		}
	}

	$indonesia = new Indonesia;
	$inggris = new Inggris;
	$spanyol = new Spanyol;

	echo "<b><br>Menyapa : </br></b>";
	echo $indonesia->Menyapa();
	echo $inggris->Menyapa();
	echo $spanyol->Menyapa();
?>