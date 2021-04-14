<?php
/**
 * 
 */
class Mes 
{
	private $numero;
	private $anio;

	public function __construct(int $num,int $ani)
	{
		$this->numero=$num;
		$this->anio=$ani;
	}
	public function Mes():int
	{
		return $this->anio.$this->numero;
	}
	public function getNumero():int
	{
		return $this->numero;
	}
	public function setNumero($num){
		$this->numero;
	}
	public function getAnio():int
	{
		return $this->anio;
	}
	public function setAnio($num){
		$this->anio;
	}
	public function getNombre():string
	{
		switch ($this->numero) {
			case 1:
				return "Enero";
				break;
				case 2:
				return "Febrero";
				break;
				case 3:
				return "Marzo";
				break;
				case 4:
				return "Abril";
				break;
				case 5:
				return "Mayo";
				break;
				case 6:
				return "Junio";
				break;
				case 7:
				return "Julio";
				break;
				case 8:
				return "Agosto";
				break;
				case 9:
				return "Septiembre";
				break;
				case 10:
				return "Octubre";
				break;
				case 11:
				return "Noviembre";
				break;
				case 12:
				return "Diciembre";
				break;
			
			default:
				"mes no existe ";
				break;
		}
	}
	public function getDias():string
	{
		if (($this->anio % 4 == 0) && (($this->anio % 100 != 0) || ($this->anio % 400 == 0)))
	return "El año es bisiesto";
else
	return"El año no es bisiesto";
	}
}
?>