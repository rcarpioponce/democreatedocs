<?php
namespace App\Http\Repositories;
class PdfRepo{
	public function demo(){
		$inputs = \Request::all();	
		$data = array('nombre'=>$inputs['nombre'],'apellido'=>$inputs['apellido']);
		$pdf = \PDF::loadView('pdf', $data);
		return $pdf->stream(); 
		//$pdf->download('invoice.pdf');
	}
} 