<?php 

// membuat class biodata
 class Biodata{

 	// menyimpan data dalam array
 	public $data = [];

 	// fungsi nama
 	public function nama($nama)
 	{
 		$this->data['name'] = $nama;
 		return $this;
 	}

	// fungsi umur
 	public function umur($umur)
 	{
 		$this->data['umur'] = $umur;
 		return $this;
 	}

 	// fungsi alamat
 	public function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}

 	// fungsi hobi
 	public function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}
 	
 	// fungsi menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
 	
 	// fungsi sekolah
 	public function sekolah($sekolah = array())
 	{
 		$this->data['school'] = $sekolah;
 		return $this;
 	}

 	// fungsi kemampuan
 	public function kemampuan($kemampuan = array())
 	{
 		$this->data['skills'] = $kemampuan;
 		return $this;
 	}

 	// fungsi ketertarikan
	public function ketertarikan($ketertarikan)
 	{
 		$this->data['interest_in_coding'] = $ketertarikan;
 		return $this;
 	}
 	// fungsi konvert ke json
 	public function konjson(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}
 	
}

$biodata 	= new Biodata();
$nama		= "Apriditya Surya Puspa Sari";
$umur		= 18;
$alamat		= "Ujung Harapan Gang Al - Ikhlas 10";
$hobi 		= ['Bulu Tangkis','Membaca Artikel','Belajar Ngoding'];
$sekolah	= [
				"sekolah" 	=> "SMK GALAJUARA",
				"year_in" 	=> 2016,
				"year_out"	=> 2019,
				"major"		=> "Teknik Komputer Jaringan"
			  ];
$kemampuan	= [
				"Web"		=> ['HTML','CSS','PHP'],
				"Level"		=> ['Beginner']
			  ];
print_r($biodata->nama($nama)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
				->kemampuan($kemampuan)
				->ketertarikan(true)
				->konjson()
);
