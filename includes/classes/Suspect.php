<?php
	class Suspect {

		private $con;

		public function __construct($con) {
			$this->con = $con;
		}

		public function checkGuilt() {
			$query = mysqli_query($this->con, "SELECT guilt FROM suspects WHERE id='$this->id'");
			$row = mysqli_fetch_array($query);
			return $row['guilt'];
        }
	}
?>