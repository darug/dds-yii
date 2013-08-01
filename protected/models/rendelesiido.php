<?php
/**
 * This is the model class RendelesiIdo"
 * adatbazis nem tartozik hozza, rendelessel kapcsolatos aktualis (időből számítható)
 * szöveget állítja elő
 * a hónap és a hét napjait magyarul írja ki
 * @author oDG
 * @date 3012.07.19.
 */
class RendelesiIdo
{
	private $nap = array();
	private $nnap;
	private $nhet;
	private $het = array();
	private $honap = array();
	private $ora;

	public function __construct(){
	
		$this->initNap();
		$this->initNnap();
		$this->initNhet();
		$this->initHet();
		$this->initHonap();
		$this->initOra();
	}
	
	public function initNap(){
	
		$this->nap = array("","hétfő","kedd","szerda","csütörtök","péntek","szombat","vasárnap" );
	
	}
	
	public function initNnap(){
		$this->nnap = date('N');
	}
	
	public function initNhet(){
		$this->nhet = date('W')%2;	
	}
	
	public function initHet(){
		$this->het  = array("páros","páratlan");
	}
	
	public function initHonap(){
		$this->honap = array('','január','február','március','április','május','június','július','augusztus','szeptember','október','november','december');
	}
	
	public function initOra(){
		$this->ora = date('H')+2;
		if($this->ora>24){$this->ora-=1;}
	}
	
	public function info(){
			if($this->nnap%2==1 && $this->nnap<5){
				$rendelido=" 8 - 12 óráig ";$riveg="van rendelés.";
				$kezd=8;$veg=12;}
		 	elseif($this->nnap%2==0 && $this->nnap<5){
		 		$rendelido=" 16 - 20 óráig ";$riveg="van rendelés.";
		 		$kezd=16;$veg=20;}
		  	elseif($this->nnap==5 && $this->nhet==0){
		  		$rendelido=" 8 - 12 óráig ";$riveg="van rendelés.";
		  		$kezd=8;$veg=12;}
			elseif($this->nnap==5 && $this->nhet==1){
		   		$rendelido=" 16 - 20 óráig "; $riveg="van rendelés.";
		   		$kezd=16;$veg=20;}
			else{
				$rendelido=" nincs rendelés!";$riveg="";
				$kezd=0;$veg=0;}
			if($this->ora<$veg){$mai="A mai napon $rendelido $riveg";} else {$mai="";}
			$info= " Ma ".date('Y')." ".$this->honap[date('n')]." ".date('j')." ".$this->nap[$this->nnap]." és ".$this->het[$this->nhet]." hét van. $mai ";
		//legközelbbi rendelés ideje
		$ido=date('i');
			if($ido==0){
				$perckezd=0;
				$atvitel=0;} 
			else {
				$perckezd=60-$ido; 
				$atvitel=1;} 
   		if($this->ora<$kezd){
   			$orakezd=$kezd-$this->ora-$atvitel;
		 	$info.= "A mai rendelés $orakezd óra $perckezd perc múlva kezdődik!";}
		elseif($this->ora<$veg){
			$orakezd=$veg-$this->ora-$atvitel;
		    $info.= "A rendelés már elkezdődött, $orakezd óra $perckezd perc múlva lesz vége!";}
		elseif($kezd==0){$info.="A legközelebbi rendelés ideje hétfőn 8-tól 12 óráig lesz!";}
		else {
			$info.="Ma már nincs rendelés! Legközelebb holnap ".$this->rendido($this->nnap+1)." lesz rendelés!";} 
			return $info;
	} //function info()
	public function rendido($n){
			if($n %2 == 1 && $n<5){
				$rendelido=" 8 - 12 óráig ";$riveg="van rendelés.";
			}
		 	elseif($n %2 == 0 && $n<5){
		 		$rendelido=" 16 - 20 óráig ";$riveg="van rendelés.";
			}
		  	elseif($n == 5 && $this->nhet==0){
		  		$rendelido=" 8 - 12 óráig ";$riveg="van rendelés.";
			}
			elseif($n ==5 && $this->nhet==1){
		   		$rendelido=" 16 - 20 óráig "; $riveg="van rendelés.";
			}
			else{
				$rendelido=" nincs rendelés!";$riveg="";
			}
			return $rendelido;
		}
		}